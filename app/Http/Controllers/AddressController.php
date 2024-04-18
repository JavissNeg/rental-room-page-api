<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $addresses,
                'message' => 'Address retrieved successfully'
            ]
        );
    }

    public function show($id)
    {
        $address = Address::find($id);
        if ($address) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $address,
                    'message' => 'Address retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Address not found'
                ]
            );
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'location'=> '',
                'street' => 'required|max:30',
                'district' => 'required|max:15',
                'zip_code' => 'required|digits:5',
                'street_number' => 'required|numeric',
                'apartment_number' => 'numeric',
                'city_id' => 'required'
            ]
        );

        if ($validator->fails()) {

            return response()->json(
                [
                    'status' => 400,
                    'errors' => $validator->errors(),
                    'message' => 'Invalid data'
                ]
            );

        } else {

            $address = Address::create(
                [
                    'street' => $request->street,
                    'district' => $request->district,
                    'zip_code' => $request->zip_code,
                    'street_number' => $request->street_number,
                    'apartment_number' => $request->apartment_number,
                    'city_id' => $request->city_id
                ]
            );

            if (!$address) {
                return response()->json(
                    [
                        'status' => 500,
                        'data' => null,
                        'message' => 'Address not created'
                    ]
                );
            } else {

                return response()->json(
                    [
                        'status' => 201,
                        'data' => $address,
                        'message' => 'Address created successfully'
                    ]
                );

            }

        }
    
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);

        if(!$address) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Address not found'
                ]
            );
        } else {
                
                $validator = Validator::make(
                    $request->all(),
                    [
                        'location'=> '',
                        'street' => 'required|max:30',
                        'district' => 'required|max:15',
                        'zip_code' => 'required|digits:5',
                        'street_number' => 'required|numeric',
                        'apartment_number' => 'numeric',
                        'city_id' => 'required'
                    ]
                );
    
                if ($validator->fails()) {
    
                    return response()->json(
                        [
                            'status' => 400,
                            'errors' => $validator->errors(),
                            'message' => 'Invalid data'
                        ]
                    );
    
                } else {
    
                    $address->street = $request->street;
                    $address->district = $request->district;
                    $address->zip_code = $request->zip_code;
                    $address->street_number = $request->street_number;
                    $address->apartment_number = $request->apartment_number;
                    $address->city_id = $request->city_id;
                    
                    $address->save();
    
                    return response()->json(
                        [
                            'status' => 200,
                            'data' => $address,
                            'message' => 'Address updated successfully'
                        ]
                    );
    
                }
        }
    }

    public function updatePartial(Request $request, $id) {
        $address = Address::find($id);

        if(!$address) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Address not found'
                ]
            );
        } else {
                
                $validator = Validator::make(
                    $request->all(),
                    [
                        'location'=> '',
                        'street' => 'max:30',
                        'district' => 'max:15',
                        'zip_code' => 'digits:5',
                        'street_number' => 'numeric',
                        'apartment_number' => 'numeric',
                        'city_id' => 'numeric'
                    ]
                );
    
                if ($validator->fails()) {
    
                    return response()->json(
                        [
                            'status' => 400,
                            'errors' => $validator->errors(),
                            'message' => 'Invalid data'
                        ]
                    );
    
                } else {
    
                    if($request->has('location')) {
                        $address->location = $request->location;
                    };
                    if ($request->has('street')) {
                        $address->street = $request->street;
                    }
                    if ($request->has('district')) {
                        $address->district = $request->district;
                    }
                    if ($request->has('zip_code')) {
                        $address->zip_code = $request->zip_code;
                    }
                    if ($request->has('street_number')) {
                        $address->street_number = $request->street_number;
                    }
                    if ($request->has('apartment_number')) {
                        $address->apartment_number = $request->apartment_number;
                    }
                    if ($request->has('city_id')) {
                        $address->city_id = $request->city_id;
                    }
                    
                    $address->save();
    
                    return response()->json(
                        [
                            'status' => 200,
                            'data' => $address,
                            'message' => 'Address updated successfully'
                        ]
                    );
    
                }
        }
    }

    public function destroy($id)
    {
        $address = Address::find($id);

        if (!$address) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Address not found'
                ]
            );

        } else {
            
            $address->delete();
            return response()->json(
                [
                    'status' => 200,
                    'data' => null,
                    'message' => 'Address deleted successfully'
                ]
            );

        }
    }
}
