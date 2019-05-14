<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use App\daily;

class SetDailyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gets a number between 1 and 7 represending monday - sunday
        $day = Carbon::now()->dayOfWeekIso;
        
        //makes a call to DB that calls a stored procedure
        $week = DB::select('call sp_weekdays()');
        
        //splits the data from the stored procedure in to days of the week
        $dishToday = "";

        switch($day){
            case 1:
                $dishToday = $week[0];
                break;
            case 2:
                $dishToday = $week[1];
                break;
            case 3:
                $dishToday = $week[2];
                break;
            case 4:
                $dishToday = $week[3];
                break;
            case 5:
                $dishToday = $week[4];
                break;
            default:
                "description";

        }


        // This is getting all dishes from database and listing them in an array
        $sidedishs = DB::table('side_dishes')->get();

        $sidedishDropDownArray = array();

        foreach($sidedishs as $sidedish)
        {
            $sidedishDropDownArray[$sidedish->id] = $sidedish->name;
        }
        

        return view('/adminviews/setDaily', [
            'dishs' => $sidedishs,
            'sidedishDropDownArray' => $sidedishDropDownArray,
            'dishToday' => $dishToday
        ]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description = $request->input('description');
        $sideone = $request->input('sideone');
        $sidetwo = $request->input('sidetwo');
        $sidethree = $request->input('sidethree');
        $sidefour = $request->input('sidefour');


        $daily = new Daily;
        $daily->description = $description;
        $daily->sideone = $sideone;
        $daily->sidetwo = $sidetwo;
        $daily->sidethree = $sidethree;
        $daily->sidefour = $sidefour;
        
        $daily->save();

        return redirect('/adminviews/setDaily')->with('success', 'Dagens menu er gemt');
    }

}
