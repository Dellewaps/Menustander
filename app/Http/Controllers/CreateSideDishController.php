<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SideDish;

class CreateSideDishController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/adminviews/createSideDish');
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
            'retten' => 'required',
        ]);

         

        //Save SideDish
        $sidedish = new SideDish;
        $sidedish->name = $request->input('retten');
        $sidedish->description = $request->input('tilbehør');

        $sidedish->save();

        return redirect('/adminviews/createSideDish')->with('success', 'Retten er gemt');

    }

    
}
