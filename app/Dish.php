<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Dish extends Model
{

    // the attributes that are assigned to the database
    public $fillable = array('name','accessories','price','photo');

    //Relationship with Weekmenu table
    //Dishes belongs to many weeks
    public function Weekmenu(){

        return $this->hasMany('App\Weekmenu');
    }
}
