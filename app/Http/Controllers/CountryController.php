<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return response()->json(
            [
                'status' => 200,
                'data' => $countries,
                'message' => 'Countries retrieved successfully'
            ]
        );
    }

    public function show($id) {
        $country = Country::find($id);
        if ($country) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $country,
                    'message' => 'Country retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Country not found'
                ]
            );
        }
    }
}
