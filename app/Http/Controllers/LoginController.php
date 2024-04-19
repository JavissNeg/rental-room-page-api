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
                'success' => 200,
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
                    'success' => 404,
                    'data' => null,
                    'message' =>  'Login not found'
                ]
                );
        } else {
            return response()->json(
                [
                    'success' => 200,
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
                'username' => 'required',
                'password' => 'required',
                'isVerified' => 'required',
                'isCertificate' => 'required',
                'person_id' => 'required'
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
                [
                    'username' => 'required',
                    'password' => 'required',
                    'isVerified' => 'required',
                    'isCertificate' => 'required',
                    'person_id' => 'required'
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
                    'username' => '',
                    'password' => '',
                    'isVerified' => '',
                    'isCertificate' => '',
                    'person_id' => ''
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

                if($request->has('username')) {
                    $login->username = $request->username;
                }
                if($request->has('password')) {
                    $login->password = $request->password;
                }
                if($request->has('isVerified')) {
                    $login->isVerified = $request->isVerified;
                }
                if($request->has('isCertificate')) {
                    $login->isCertificate = $request->isCertificate;
                }
                if($request->has('person_id')) {
                    $login->person_id = $request->person_id;
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

}
