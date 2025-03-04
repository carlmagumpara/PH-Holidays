<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('order_by') && $request->order_by && !in_array($request->order_by, ['ASC', 'DESC'])) {
            return response()->json([
                'result' => 'error',
                'message' => 'The provided order_by should ASC or DESC only.',
            ], 200);
        }

        $holiday = Holiday::orderBy('date', $request->order_by ?? 'DESC');

        if($request->has('year') && $request->year) {
            $holiday->whereYear('date', $request->year);
        } else {
            $holiday->whereYear('date', date('Y'));
        }

        return response()->json([
            'result' => 'success',
            'data' => $holiday->get()
        ], 200);
    }
}
