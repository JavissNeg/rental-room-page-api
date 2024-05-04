<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use App\Mail\CompleteRegisterMail;

class MailController extends Controller
{
    private $VERIFICATION_TYPE = 'verificationCode';
    private $REGISTER_TYPE = 'completeRegister';
    private $RENTAL_TYPE = 'completeRental';

    public function store(Request $request) {
        
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'mail' => 'required|email',
                'username' => '',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    'success' => 400,
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
        $verification_code = rand(100000, 999999);
        $data = [
            'verification_code' => $verification_code
        ];
        
        Mail::to($request->mail)
            ->send(
                (new VerificationCodeMail($verification_code))
            );
            
        return response()->json(
            [
                'success' => 200,
                'data' => $data,
                'message' => 'Verification code sent to ' . $request->mail
            ]
        );
    }

    private function handleRegisterType(Request $request) {
        $username = $request->username;
        
        if($username) {
            Mail::to($request->mail)
            ->send(
                (new CompleteRegisterMail($request->username))
            );

            return response()->json(
                [
                    'success' => 200,
                    'message' => 'Complete register mail sent to ' . $request->mail
                ]
            );

        } else {
            return response()->json(
                [
                    'status' => 400,
                    'message' => 'Username missing'
                ]
            );
        }
    }

}