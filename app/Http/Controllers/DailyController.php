<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use App\daily;

class DailyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $date = Carbon::now()->toDateString();
        $dayoftheweek = $this->dayoftheweek();

        $dishtoday = $this->dishtoday();
        $dishdescription = "";

        $today = DB::select('call sp_daily');
        $dailydescription = DB::table('dailies')->select('description', 'created_at')->orderby('id', 'desc')->first();
        

        
        if($dailydescription->created_at == $date)
        {
            $dishdescription = $dailydescription->description;
        }else
        {
            $dishdescription = $dishtoday->accessories;
        }

        

        
        return view('dailydish', [
            'dishtoday' => $dishtoday,
            'dishdescription' => $dishdescription,
            'today' => $today,
            'dayoftheweek' => $dayoftheweek
        ]);
    }

    public function dishtoday()
    {
        //Gets a number between 1 and 7 represending monday - sunday
        $day = $this->dayoftheweek();
        
        //makes a call to DB that calls a stored procedure
        $week = DB::select('call sp_weekdays()');
        
        //splits the data from the stored procedure in to days of the week
        $dishToday = "";

        switch($day){
            case "Mandag":
                $dishToday = $week[0];
                break;
            case "Tirsdag":
                $dishToday = $week[1];
                break;
            case "Onsdag":
                $dishToday = $week[2];
                break;
            case "Torsdag":
                $dishToday = $week[3];
                break;
            case "Fredag":
                $dishToday = $week[4];
                break;
            default:
                "description";

        }

        return $dishToday;
    }

    public function dayoftheweek()
    {
        //Gets a number between 1 and 7 represending monday - sunday
        $day = Carbon::now()->dayOfWeekIso;



        $toDay = "";

        switch($day){
            case 1:
                $toDay = "Mandag";
                break;
            case 2:
                $toDay = "Tirsdag";
                break;
            case 3:
                $toDay = "Onsdag";
                break;
            case 4:
                $toDay = "Torsdag";
                break;
            case 5:
                $toDay = "Fredag";
                break;
            default:
                "description";

        }

        return $toDay;

    }
}
