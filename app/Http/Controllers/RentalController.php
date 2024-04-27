<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Facades\Validator;

class RentalController extends Controller
{
    public function index() {
        $rentals = Rental::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $rentals,
                'message' => 'Rental retrieved successfully'
            ]
        );
    }

    public function show($id) {
        $rental = Rental::find($id);

        if($rental) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $rental,
                    'message' => 'Rental retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Rental not found'
                ]
            );
        }
    }


    public function store(Request $request, $id) {
        $validator = Validator::make(
            $request->all(),
            [
                'contract' => '',
                'total' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'rental_status_id' => 'required',
                'property_id' => 'required',
                'lessee_id' => 'required',
                'evaluation_id' => 'required'
            ]
        );

        if($validator->fails()) {

            return response()->json(
                [
                    'status' => 400,
                    'data' => $validator->errors(),
                    'message' => 'Rental not created'
                ]
            );

        } else {

            $rental = Rental::create($request->all());

            if($rental) {
                return response()->json(
                    [
                        'status' => 201,
                        'data' => $rental,
                        'message' => 'Rental created successfully'
                    ]
                );
            } else {
                return response()->json(
                    [
                        'status' => 500,
                        'data' => null,
                        'message' => 'Rental not created'
                    ]
                );
            }

        }

    }

    public function update(Request $request, $id) {
        $rental = Rental::find($id);

        if(!$rental) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Rental not found'
                ]
            );
        } else {

            $validator = Validator::make(
                $request->all(),
                [
                    'contract' => '',
                    'total' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required',
                    'rental_status_id' => 'required',
                    'property_id' => 'required',
                    'lessee_id' => 'required',
                    'evaluation_id' => 'required'
                ]
            );

            if($validator->fails()) {
                return response()->json(
                    [
                        'status' => 400,
                        'data' => $validator->errors(),
                        'message' => 'Rental not updated'
                    ]
                );
            } else {
               
                $rental->update($request->all());

                return response()->json(
                    [
                        'status' => 200,
                        'data' => $rental,
                        'message' => 'Rental updated successfully'
                    ]
                );
            }
        }

    }

    public function updatePartial(Request $request, $id) {
        $rental = Rental::find($id);

        if(!$rental) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Rental not found'
                ]
            );
        } else {

            $validator = Validator::make(
                $request->all(),
                [
                    'contract' => '',
                    'total' => '',
                    'start_date' => '',
                    'end_date' => '',
                    'rental_status_id' => '',
                    'property_id' => '',
                    'lessee_id' => '',
                    'evaluation_id' => ''
                ]
            );

            if($validator->fails()) {
                return response()->json(
                    [
                        'status' => 400,
                        'data' => $validator->errors(),
                        'message' => 'Rental not updated'
                    ]
                );
            } else {
               
                if($request->has('contract')) {
                    $rental->contract = $request->contract;
                }
                if($request->has('total')) {
                    $rental->total = $request->total;
                }
                if($request->has('start_date')) {
                    $rental->start_date = $request->start_date;
                }
                if($request->has('end_date')) {
                    $rental->end_date = $request->end_date;
                }
                if($request->has('rental_status_id')) {
                    $rental->rental_status_id = $request->rental_status_id;
                }
                if($request->has('property_id')) {
                    $rental->property_id = $request->property_id;
                }
                if($request->has('lessee_id')) {
                    $rental->lessee_id = $request->lessee_id;
                }
                if($request->has('evaluation_id')) {
                    $rental->evaluation_id = $request->evaluation_id;
                }

                $rental->save();

                return response()->json(
                    [
                        'status' => 200,
                        'data' => $rental,
                        'message' => 'Rental updated successfully'
                    ]
                );
            }
        }
    }

    public function destroy($id) {
        $rental = Rental::find($id);

        if(!$rental) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Rental not found'
                ]
            );
        } else {
            $rental->delete();

            return response()->json(
                [
                    'status' => 200,
                    'data' => $rental,
                    'message' => 'Rental deleted successfully'
                ]
            );
        }
    }


}
