<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use App\Mail\CompleteRegisterMail;

class MailController extends Controller
{
    private $VERIFICATION_TYPE = 'verifyMail';
    private $REGISTER_TYPE = 'completeRegister';
    private $RENTAL_TYPE = 'completeRental';

    public function store(Request $request) {
        
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'mail' => 'required|email',
                'verification_code' => '',
                'subject' => '',
            ]
        );

        if ($validator->fails()) {

            return response()->json(
                [
                    'status' => 400,
                    'data' => $validator->errors(),
                    'message' => 'Validation error'
                ]
            );

        }  else {

            if($request->type == $this->VERIFICATION_TYPE) {
                return $this->handleVerificationType($request);
            }
    
            if($request->type == $this->REGISTER_TYPE) {
                return $this->handleRegisterType($request);
            }

        }

    }


    private function handleVerificationType(Request $request) {
    
        Mail::to($request->mail)
            ->send(
                (new VerificationCodeMail($request->verification_code))
            );
            
        return response()->json(
            [
                'status' => 200,
                'data' => [
                    'verification_code' => $request->verification_code,
                ],
                'message' => 'Verification code sent to ' . $request->mail
            ]
        );
    }

    private function handleRegisterType(Request $request) {
        $subject = $request->subject;
        
        if($subject) {
            Mail::to($request->mail)
                ->send(
                    (new CompleteRegisterMail($request->subject))
                );

            return response()->json(
                [
                    'status' => 200,
                    'data' => [],
                    'message' => 'Complete register mail sent to ' . $request->mail
                ]
            );

        } else {
            return response()->json(
                [
                    'status' => 400,
                    'data' => [],
                    'message' => 'Username missing'
                ]
            );
        }
    }

}