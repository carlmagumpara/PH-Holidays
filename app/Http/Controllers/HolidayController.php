<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index(Request $request)
    {
        $holiday = Holiday::orderBy('date', 'DESC');

        if($request->has('year') && $request->year) {
            $holiday->whereYear('date', $request->year);
        }

        return $holiday->get();
    }
}
