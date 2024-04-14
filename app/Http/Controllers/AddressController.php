<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

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
        $request->validate(
            [
                'address' => 'required',
                'district' => 'required',
                'zip_code' => 'required',
                'street_number' => 'required',
                'city_id' => 'required'
            ]
        );
        
        $address = new Address();
        $address->address = $request->address;
        $address->district = $request->district;
        $address->zip_code = $request->zip_code;
        $address->street_number = $request->street_number;
        $address->apartment_number = $request->apartment_number;
        $address->city_id = $request->city_id;
        $address->save();   
        
        return response()->json(
            [
                'status' => 201,
                'data' => $address,
                'message' => 'Address created successfully'
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);
        if ($address) {
            $address->address = $request->address;
            $address->city_id = $request->city_id;
            $address->save();
            return response()->json(
                [
                    'status' => 200,
                    'data' => $address,
                    'message' => 'Address updated successfully'
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

    public function destroy($id)
    {
        $address = Address::find($id);
        if ($address) {
            $address->delete();
            return response()->json(
                [
                    'status' => 200,
                    'data' => null,
                    'message' => 'Address deleted successfully'
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
}
