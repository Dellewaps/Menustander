<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;

class CreateDishController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/adminviews/createDish');
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
            'photo' => 'image'
        ]);
        

         //Get filename with extension
         $filenameWithExt = $request->file('photo')->getClientOriginalName();

         //Get just the filename
         $filname = pathinfo($filenameWithExt, PATHINFO_FILENAME);
 
         //Get extension
         $extension = $request->file('photo')->getClientOriginalExtension();
 
         //Get input name
         $inputname = $request->input('titel');
 
         //Create new filename
         $filenameToStore = $inputname.'_'.time().'.'.$extension;

         //Upload image
        $path = $request->file('photo')->storeAs('public/photos/', $filenameToStore);

        //Save Dish
        $dish = new Dish;
        $dish->name = $request->input('retten');
        $dish->accessories = $request->input('tilbehør');
        $dish->price = $request->input('pris');
        $dish->photo = $filenameToStore;

        $dish->save();

        return redirect('/adminviews/createDish')->with('success', 'Retten er gemt');

    }

}
