<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function index() {
        $evaluations = Evaluation::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $evaluations,
                'message' => 'Evaluation data retrieved successfully.'
            ]
        );
    }

    public function show($id) {
        $evaluation = Evaluation::find($id);
        
        if ($evaluation) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $evaluation,
                    'message' => 'Evaluation data retrieved successfully.'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Evaluation data not found.'
                ]
            );
        }
    }

    public function findByProperty($property_id) {
        $evaluations = Evaluation::where('property_id', $property_id)->get();
        
        if ($evaluations) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $evaluations,
                    'message' => 'Evaluation data retrieved successfully.'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Evaluation data not found.'
                ]
            );
        }
    }
}
