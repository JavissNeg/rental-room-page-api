<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
