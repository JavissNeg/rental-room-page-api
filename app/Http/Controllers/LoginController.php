<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Login;

class LoginController extends Controller
{
    public function index() {
        $logins = Login::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $logins,
                'message' => 'Logins retrieved successfully'
            ]
        );
    }

    public function  show($id) {
        $login = Login::find($id);

        if(!$login) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' =>  'Login not found'
                ]
                );
        } else {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $login,
                    'message' =>  'Login retrieved successfully'
                ]
                );
        }
    }

    public function store(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'national_id_image' => 'nullable',
                'first_name' => 'required',
                'paternal_surname' => 'required',
                'maternal_surname' => 'required',
                'mail' => 'required|email|unique:login,mail',
                'phone' => 'nullable|numeric',
                'password' => 'required ',
                'isVerified' => 'required|accepted',
                'isCertified' => 'required|boolean',
                'address_id' => 'nullable|numeric'
            ]
        );
        
        if($validator->fails()) {
            return response()->json(
                [
                    'success' => 400,
                    'data' => null,
                    'message' => $validator->errors()
                ]
            );
        } else {

            $login = Login::create($request->all());

            if($login) {
                return response()->json(
                    [
                        'success' => 201,
                        'data' => $login,
                        'message' => 'Login created successfully'
                    ]
                );
            } else {
                return response()->json(
                    [
                        'success' => 500,
                        'data' => null,
                        'message' => 'Login could not be created'
                    ]
                );
            }

        }
    }

    public function update(Request $request, $id) {
        $login = Login::find($id);
        
        if(!$login) {
            return response()->json(
                [
                    'success' => 404,
                    'data' => null,
                    'message' => 'Login not found'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [   'national_id_image' => 'nullable', 
                    'first_name' => 'required',
                    'paternal_surname' => 'required',
                    'maternal_surname' => 'required',
                    'mail' => 'required|email',
                    'phone' => 'nullable|numeric',
                    'password' => 'required',
                    'isVerified' => 'required',
                    'isCertified' => 'required',
                    'address_id' => 'required'
                ]
            );

            if($validator->fails()) {
                return response()->json(
                    [
                        'success' => 400,
                        'data' => null,
                        'message' => $validator->errors()
                    ]
                );
            } else {
                $login->update($request->all());
                return response()->json(
                    [
                        'success' => 200,
                        'data' => $login,
                        'message' => 'Login updated successfully'
                    ]
                );
            }
        }
    }

    public function updatePartial(Request $request, $id) {
        $login = Login::find($id);

        if(!$login) {
            return response()->json(
                [
                    'success' => 404,
                    'data' => null,
                    'message' => 'Login not found'
                ]
            );
        } else {

            $validator = Validator::make(
                $request->all(),
                [
                    'national_id_image' => '', 
                    'first_name' => '', 
                    'paternal_surname' => '', 
                    'maternal_surname' => '', 
                    'mail' => '', 
                    'phone' => '',
                    'password' => '',
                    'isVerified' => '',
                    'isCertified' => '',
                    'address_id' => ''
                ]
            );

            if($validator->fails()) {
                return response()->json(
                    [
                        'success' => 400,
                        'data' => null,
                        'message' => $validator->errors()
                    ]
                );
            } else {

                if($request->has('national_id_image')) {
                    $login->username = $request->national_id_image;
                }
                if($request->has('first_name')) {
                    $login->first_name = $request->first_name;
                }
                if($request->has('paternal_surname')) {
                    $login->paternal_surname = $request->paternal_surname;
                }
                if($request->has('maternal_surname')) {
                    $login->maternal_surname = $request->maternal_surname;
                }
                if($request->has('mail')) {
                    $login->mail = $request->mail;
                }
                if($request->has('phone')) {
                    $login->phone = $request->phone;
                }
                if($request->has('password')) {
                    $login->password = $request->password;
                }
                if($request->has('isVerified')) {
                    $login->isVerified = $request->isVerified;
                }
                if($request->has('isCertified')) {
                    $login->isCertificate = $request->isCertified;
                }
                if($request->has('address_id')) {
                    $login->person_id = $request->address_id;
                }

                $login->save();

                return response()->json(
                    [
                        'success' => 200,
                        'data' => $login,
                        'message' => 'Login updated successfully'
                    ]
                );
            }
        }
    }

    public function destroy($id) {
        $login = Login::find($id);

        if(!$login) {
            return response()->json(
                [
                    'success' => 404,
                    'data' => null,
                    'message' => 'Login not found'
                ]
            );
        } else {
            $login->delete();
            return response()->json(
                [
                    'success' => 200,
                    'data' => $login,
                    'message' => 'Login deleted successfully'
                ]
            );
        }
    }

    public function searchByMail($mail) {
        $login = Login::where('mail', $mail)->get();

        if($login->isEmpty()) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Login not found'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $login,
                    'message' => 'Login retrieved successfully'
                ]
            );
        }
    }

}
