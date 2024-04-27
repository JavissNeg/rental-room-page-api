<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Person;

class PersonController extends Controller
{
    public function index() {
        $people = Person::all();

        return response()->json(
            [
                'status' => 200,
                'data' => $people,
                'message' => 'People retrieved successfully'
            ]
        );
    }

    public function show($id) {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(
                [
                    'status' => 404,
                    'message' => 'Person not found'
                ],
                404
            );
        } else {

            return response()->json(
                [
                    'status' => 200,
                    'data' => $person,
                    'message' => 'Person retrieved successfully'
                ]
            );

        }
    }

    public function store(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'national_id_image' => 'nullable',
                'first_name' => 'required|string|max:20',
                'paternal_surname' => 'required|string|max:10',
                'maternal_surname' => 'required|string|max:10',
                'mail' => 'required|email|max:60|unique:Person,mail',
                'phone' => 'nullable|string|digits:10',
                'address_id' => 'nullable|integer'
            ]
        );

        if($validator->fails()) {
            return response()->json(
                [
                    'status' => 400,
                    'errors' => $validator->errors(),
                    'message' => 'Bad request'
                ],
                400
            );
        } else {

            $person = Person::create($request->all());

            return response()->json(
                [
                    'status' => 201,
                    'errors' => $person,
                    'message' => 'Person created successfully'
                ]
            );
        }
    }

    public function update(Request $request, $id) {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(
                [
                    'status' => 404,
                    'message' => 'Person not found'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'national_id_image' => 'nullable',
                    'first_name' => 'required|string|max:20',
                    'paternal_surname' => 'required|string|max:10',
                    'maternal_surname' => 'required|string|max:10',
                    'mail' => 'required|email|max:60|unique:Person,mail',
                    'phone' => 'nullable|string|digits:10',
                    'address_id' => 'required|integer'
                ]
            );

            if($validator->fails()) {
                return response()->json(
                    [
                        'status' => 400,
                        'errors' => $validator->errors(),
                        'message' => 'Bad request'
                    ]
                );
            } else {
                $person->update($request->all());
                
                return response()->json(
                    [
                        'status' => 200,
                        'data' => $person,
                        'message' => 'Person updated successfully'
                    ]
                );
            }
        }
    }

    public function updatePartial(Request $request, $id) {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(
                [
                    'status' => 404,
                    'message' => 'Person not found'
                ],
                404
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'national_id_image' => 'nullable',
                    'first_name' => 'nullable|string|max:20',
                    'paternal_surname' => 'nullable|string|max:10',
                    'maternal_surname' => 'nullable|string|max:10',
                    'mail' => 'nullable|email|max:60|unique:Person,mail',
                    'phone' => 'nullable|string|digits:10',
                    'address_id' => 'nullable|integer'
                ]
            );

            if($validator->fails()) {
                return response()->json(
                    [
                        'status' => 400,
                        'errors' => $validator->errors(),
                        'message' => 'Bad request'
                    ],
                    400
                );
            } else {
                if ($request->has('national_id_image')) {
                    $person->national_id_image = $request->national_id_image;
                }
                if ($request->has('first_name')) {
                    $person->first_name = $request->first_name;
                }
                if ($request->has('paternal_surname')) {
                    $person->paternal_surname = $request->paternal_surname;
                }
                if ($request->has('maternal_surname')) {
                    $person->maternal_surname = $request->maternal_surname;
                }
                if ($request->has('mail')) {
                    $person->mail = $request->mail;
                }
                if ($request->has('phone')) {
                    $person->phone = $request->phone;
                }
                if ($request->has('address_id')) {
                    $person->address_id = $request->address_id;
                }

                $person->save();

                return response()->json(
                    [
                        'status' => 200,
                        'data' => $person,
                        'message' => 'Person updated successfully'
                    ]
                );
            }
        }
    }
}
