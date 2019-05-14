<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekmenu extends Model
{

    public $timestamps = false;

    // the attributes that are assigned to the database
    public $fillable = array('monday','tuesday','wednesday','thursday','friday');

    //Relationship with dish table
    //Week has many dishes
    public function dish(){

        return $this->hasMany('App\Dish');
    }
}
