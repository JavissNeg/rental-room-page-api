<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $cities,
                'message' => 'Cities retrieved successfully'
            ]
        );
    }

    public function show($id)
    {
        $city = City::find($id);
        if ($city) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $city,
                    'message' => 'City retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'City not found'
                ]
            );
        }
    }
    
}
