<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daily extends Model
{
    

    // the attributes that are assigned to the database
    public $fillable = array('description','sideone','sidetwo','sidethree','sidefour');

        //Relationship with dish table
    //Week has many dishes
    public function sidedish(){

        return $this->hasMany('App\SideDish');
    }
}
