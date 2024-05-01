<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    public function index() {

        
        $properties = Property::with('login')
            ->with('address')
            ->with('address.city')
            ->with('address.city.state')
            ->with('address.city.state.country')
            ->with('property_type')
            ->with('currency')
            ->with('period')
            ->get();

        return response()->json(
            [
                'status' => 200,
                'data' => $properties,
                'message' => 'Properties retrieved successfully'
            ]
        );

    }

    public function show($id) {
        $property = Property::with('login')
            ->with('address')
            ->with('address.city')
            ->with('address.city.state')
            ->with('address.city.state.country')
            ->with('property_type')
            ->with('currency')
            ->with('period')
            ->find($id);

        if ($property) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $property,
                    'message' => 'Property retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Property not found'
                ]
            );
        }
    }

    public function store(Request $request) {
        $validator = Validator::make(
            $request->all(), [
                'name' => 'required',
                'description' => 'requuired',
                'bedrooms_number' => 'required',
                'bathrooms_number' => 'required',
                'image_url' => 'required',
                'price' => 'required',
                'lessor_id' => 'required',
                'address_id' => 'required',
                'property_type_id' => 'required',
                'currency_id' => 'required',
                'period_id' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(
                [
                    'status' => 400,
                    'data' => null,
                    'message' => 'Invalid data'
                ]
            );

        } else {
            
            $property = Property::create($request->all());
            
            if ($property) {

                return response()->json(
                    [
                        'status' => 201,
                        'data' => $property,
                        'message' => 'Property created successfully'
                    ]
                );

            } else {

                return response()->json(
                    [
                        'status' => 500,
                        'data' => null,
                        'message' => 'Property not created'
                    ]
                );

            }
        }
    }

    public function update(Request $request, $id) {
        $property = Property::find($id);
        if (!$property) {

            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Property not found'
                ]
            );

            
        } else {

            $validator = Validator::make(
                $request->all(), [
                    'name' => 'required',
                    'description' => 'requuired',
                    'bedrooms_number' => 'required',
                    'bathrooms_number' => 'required',
                    'image_url' => 'required',
                    'price' => 'required',
                    'lessor_id' => 'required',
                    'address_id' => 'required',
                    'property_type_id' => 'required',
                    'currency_id' => 'required',
                    'period_id' => 'required'
            ]);
    
            if ($validator->fails()) {
    
                return response()->json(
                    [
                        'status' => 400,
                        'data' => null,
                        'message' => 'Invalid data'
                    ]
                );
    
            } else {
                
                //$property->update($request->all());
                $property->name = $request->name;
                $property->description = $request->description;
                $property->bedrooms_number = $request->bedrooms_number;
                $property->bathrooms_number = $request->bathrooms_number;
                $property->image_url = $request->image_url;
                $property->price = $request->price;
                $property->lessor_id = $request->lessor_id;
                $property->address_id = $request->address_id;
                $property->property_type_id = $request->property_type_id;
                $property->currency_id = $request->currency_id;
                $property->period_id = $request->period_id;

                $property->save();

                return response()->json(
                    [
                        'status' => 200,
                        'data' => $property,
                        'message' => 'Property updated successfully'
                    ]
                );
            }

        }
        
    }

    public function updatePartial(Request $request, $id) {
        $property = Property::find($id);
        if (!$property) {

            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Property not found'
                ]
            );

            
        } else {

            $validator = Validator::make(
                $request->all(), [
                    'name' => 'nullable',
                    'description' => 'nullable',
                    'bedrooms_number' => 'nullable',
                    'bathrooms_number' => 'nullable',
                    'image_url' => 'nullable',
                    'price' => 'nullable',
                    'lessor_id' => 'nullable',
                    'address_id' => 'nullable',
                    'property_type_id' => 'nullable',
                    'currency_id' => 'nullable',
                    'period_id' => 'nullable'
            ]);
    
            if ($validator->fails()) {
    
                return response()->json(
                    [
                        'status' => 400,
                        'data' => null,
                        'message' => 'Invalid data'
                    ]
                );
    
            } else {
                
                if ($request->has('name')) {
                    $property->name = $request->name;
                }
                if ($request->has('description')) {
                    $property->description = $request->description;
                }
                if ($request->has('bedrooms_number')) {
                    $property->bedrooms_number = $request->bedrooms_number;
                }
                if ($request->has('bathrooms_number')) {
                    $property->bathrooms_number = $request->bathrooms_number;
                }
                if ($request->has('image_url')) {
                    $property->image_url = $request->image_url;
                }
                if ($request->has('price')) {
                    $property->price = $request->price;
                }
                if ($request->has('lessor_id')) {
                    $property->lessor_id = $request->lessor_id;
                }
                if ($request->has('address_id')) {
                    $property->address_id = $request->address_id;
                }
                if ($request->has('property_type_id')) {
                    $property->property_type_id = $request->property_type_id;
                }
                if ($request->has('currency_id')) {
                    $property->currency_id = $request->currency_id;
                }
                if ($request->has('period_id')) {
                    $property->period_id = $request->period_id;
                }

                $property->save();
                
                return response()->json(
                    [
                        'status' => 200,
                        'data' => $property,
                        'message' => 'Property updated successfully'
                    ]
                );
            }

        }
    }

    public function destroy($id) {
        $property = Property::find($id);

        if ($property) {
            $property->delete();
            return response()->json(
                [
                    'status' => 200,
                    'data' => null,
                    'message' => 'Property deleted successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Property not found'
                ]
            );
        }
        
    }

    public function findByType($property_type_id) {
        
        $properties = Property::with('login')
        ->with('address')
        ->with('address.city')
        ->with('address.city.state')
        ->with('address.city.state.country')
        ->with('property_type')
        ->with('currency')
        ->with('period')
        ->where('property_type_id', $property_type_id)
        ->get();

        if($properties) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $properties,
                    'message' => 'Properties retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Properties not found'
                ]
            );
        }

    }    

    public function getLast($number_top) {
        
        $properties = Property::with('login')
        ->with('address')
        ->with('address.city')
        ->with('address.city.state')
        ->with('address.city.state.country')
        ->with('property_type')
        ->with('currency')
        ->with('period')
        ->get();

        if($properties) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $properties,
                    'message' => 'Properties retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Properties not found'
                ]
            );
        }

    }

}