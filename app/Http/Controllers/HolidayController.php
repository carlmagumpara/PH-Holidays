<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('order_by') && $request->order_by && !in_array(strtoupper($request->order_by), ['ASC', 'DESC'])) {
            return response()->json([
                'result' => 'error',
                'message' => 'The order_by parameter should be either ASC or DESC.',
            ], 400);
        }

        $holiday = Holiday::orderBy('date', $request->order_by ?? 'DESC');

        if($request->has('year') && $request->year) {
            $holiday->whereYear('date', $request->year);
        } else {
            $holiday->whereYear('date', date('Y'));
        }

        if($request->has('country_code') && $request->country_code) {
            $holiday->where(['country_code' => $request->country_code]);
        }

        return response()->json([
            'result' => 'success',
            'data' => $holiday->get()
        ], 200);
    }
}
