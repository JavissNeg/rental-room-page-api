<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\VerificationCode;

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

            return response()->json(
                [
                    'status' => 201,
                    'data' => $response_verification_code,
                    'message' => 'Verification code created'
                ]
            );
        
        }
    }

    public function isAvailable($mail) {
        $verification_code = VerificationCode::where('mail', $mail)
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
