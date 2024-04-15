<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalStatus;

class RentalStatusController extends Controller
{
    public function index() {
        $rentalStatuses = RentalStatus::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $rentalStatuses,
                'message' => 'Rental Statuses retrieved successfully'
            ]
        );
    }

    public function show($id) {
        $rentalStatus = RentalStatus::find($id);

        if ($rentalStatus) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $rentalStatus,
                    'message' => 'Rental Status retrieved successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Rental Status not found'
                ]
            );
        }
    }
}
