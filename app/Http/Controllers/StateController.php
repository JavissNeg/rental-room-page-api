<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    
    public function index()
    {
        $states = State::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $states,
                'message' => 'States retrieved successfully'
            ] 
        );
    }
    
    public function show($id)
    {   
        $state = State::find($id);
        if ($state) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $state,
                    'message' => 'State retrieved successfully'
                ]);
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'State not found'
                ]);
        }
    }
}
