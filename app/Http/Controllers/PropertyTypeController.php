<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property_Type;

class PropertyTypeController extends Controller
{
    public function index() {
        $propertyTypes = Property_Type::all();

        return response()->json(
            [
                'status' => 200,
                'data' => $propertyTypes,
                'message' => 'Property types retrieved successfully.',
            ]
        );
    }

    public function show($id) {
        $propertyType = Property_Type::find($id);

        if ($propertyType) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $propertyType,
                    'message' => 'Property type retrieved successfully.',
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Property type not found.',
                ]
            );
        }
    }
}
