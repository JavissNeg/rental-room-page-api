<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCodeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class VerificationCodeController extends Controller
{
    
    public function store(Request $request) {

        $code = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', 7)), 0, 7);
        $expires_at = date('Y-m-d H:i:s', strtotime('+5 minutes'));
        
        $request->merge(
            [
                'code' => $code,
                'expires_at' => $expires_at
            ]
        );

        $validator = Validator::make(
            $request->all(), 
            [
                'mail' => 'required|email',
                'code' => 'required|string|size:7',
                'expires_at' => 'required|date'
            ]
        );
        
        if($validator->fails()) {
            
            return response()->json(
                [
                    'status' => 400,
                    'data' => $validator->errors(),
                    'message' => 'Validation error'
                ]
            );

        } else {

            $response_verification_code = VerificationCode::create($request->all());

            Mail::to($request->mail)
            ->send(
                (new VerificationCodeMail($request->code))
            );

            return response()->json(
                [
                    'status' => 201,
                    'data' => [
                        'verification_code' => $response_verification_code
                    ],
                    'message' => 'Verification code created'
                ]
            );
        

            


        }
    }

    public function verifyCode(Request $request) {
            
        $validator = Validator::make(
            $request->all(), 
            [
                'mail' => 'required|email',
                'code' => 'required|string|size:7'
            ]
        );

        if($validator->fails()) {
                
            return response()->json(
                [
                    'status' => 400,
                    'data' => $validator->errors(),
                    'message' => 'Validation error'
                ]
            );
    
        } else {

            $verification_code = VerificationCode::where('mail', $request->mail)
                ->where('code', $request->code)
                ->where('expires_at', '>', date('Y-m-d H:i:s'))
                ->first();

            if($verification_code) {

                return response()->json(
                    [
                        'status' => 200,
                        'data' => $verification_code,
                        'message' => 'Verification code is valid'
                    ]
                );
            } else {
                return response()->json(
                    [
                        'status' => 404,
                        'data' => null,
                        'message' => 'Verification code is invalid'
                    ]
                );
            }
        }

    }

}
