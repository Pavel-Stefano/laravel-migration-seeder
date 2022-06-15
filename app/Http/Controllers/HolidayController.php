<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    public function index(){
        $holidays = Holiday::all();
        return view('holidaylist', compact('holidays'));
    }

    public function show($id){
        $holiday = Holiday::findOrFail($id);
        return view('hday', compact('holiday'));
    }
}
