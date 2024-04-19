<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;

class MailController extends Controller
{
    private $VERIFICATION_TYPE = 'verification_code';

    public function store(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'mail' => 'required'
            ]
        );

        if ($validator->fails()) {

            return response()->json(
                [
                    'success' => 400,
                    'errors' => $validator->errors(),
                    'message' => 'Validation failed'
                ]
            );

        } else {
            
            if($request->type == $this->VERIFICATION_TYPE) {

                $verification_code = rand(100000, 999999);
                $data = [
                    'verification_code' => $verification_code
                ];
                
                Mail::to($request->mail)
                    ->send(
                        (new VerificationCodeMail($verification_code))->from('rentalproperty@gmail.com', 'Rental Property')
                    );
                    
                return response()->json(
                    [
                        'success' => 200,
                        'data' => $data,
                        'message' => 'Verification code sent to ' . $request->mail
                    ]
                );
                
            } else {

                return response()->json(
                    [
                        'success' => 400,
                        'message' => 'Invalid type'
                    ]
                );

            }

        }
    }

}
