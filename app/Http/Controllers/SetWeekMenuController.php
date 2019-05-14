<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Weekmenu;

class SetWeekMenuController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        // This is getting all dishes from database and listing them in an array
        $dishs = DB::table('dishes')->get();

        $dishDropDownArray = array();

        foreach($dishs as $dish)
        {
            $dishDropDownArray[$dish->id] = $dish->name;
        }
        

        return view('/adminviews/setWeekMenu', [
            'dishs' => $dishs,
            'dishDropDownArray' => $dishDropDownArray
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
        $this->validate($request,[
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required'
        ]);

        $monday = $request->input('monday');
        $tuesday = $request->input('tuesday');
        $wednesday = $request->input('wednesday');
        $thursday = $request->input('thursday');
        $friday = $request->input('friday');

        $weekmenu = new Weekmenu;
        $weekmenu->monday = $monday;
        $weekmenu->tuesday = $tuesday;
        $weekmenu->wednesday = $wednesday;
        $weekmenu->thursday = $thursday;
        $weekmenu->friday = $friday;

        $weekmenu->save();

        return redirect('/adminviews/setWeekMenu')->with('success', 'Uge menuen er gemt');
    }
}
