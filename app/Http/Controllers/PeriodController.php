<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Period;

class PeriodController extends Controller
{
    public function index()
    {
        $periods = Period::all();

        return response()->json(
            [
                'status' => 200,
                'data' => $periods,
                'message' => 'Periods retrieved successfully'
            ]
        );
    }

    public function show($id)
    {
        $period = Period::find($id);

        if ($period) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $period,
                    'message' => 'Period retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Period not found'
                ]
            );
        }
    }
}
