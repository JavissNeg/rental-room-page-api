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
    private $REGISTER_TYPE = 'completeRegistration';
    private $RENTAL_TYPE = 'completeRental';

    public function store(Request $request) {
        
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'mail' => 'required|email',
                'addressee' => 'required',
                'verification_code' => '',
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
                (new VerificationCodeMail($request->addressee, $request->verification_code))
            );
            
        return response()->json(
            [
                'status' => 200,
                'data' => $request,
                'message' => 'Verification code sent to ' . $request->mail
            ]
        );
    }

    private function handleRegisterType(Request $request) {
            Mail::to($request->mail)
                ->send(
                    (new CompleteRegisterMail($request->addressee))
                );

            return response()->json(
                [   
                    'status' => 200,
                    'data' => $request,
                    'message' => 'Complete register mail sent to ' . $request->mail
                ]
            );
    }

}