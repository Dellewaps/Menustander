<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WeekmenuController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //makes a call to DB that calls a stored procedure
        $week = DB::select('call sp_weekdays()');

        //splits the data from the stored procedure in to days of the week
        $monday = $week[0];
        $tuesday = $week[1];
        $wednesday = $week[2];
        $thursday = $week[3];
        $friday = $week[4];



        return view('weekmenu', [
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday
        ]);

        
    }
}
