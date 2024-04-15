<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index() {
        $currencies = Currency::all();
        return response()->json(
            [
                'status' => 200,
                'data' => $currencies,
                'message' => 'Currencies retrieved successfully.'
            ]
        );
    }

    public function show($id) {
        $currency = Currency::find($id);
        if ($currency) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $currency,
                    'message' => 'Currency retrieved successfully.'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Currency not found.'
                ]
            );
        }
    }
}
