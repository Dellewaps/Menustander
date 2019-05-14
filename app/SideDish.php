<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideDish extends Model
{
    
    public $timestamps = false;

    public $fillable = array('name','description');

    public function daily(){

        return $this->hasMany('App\daily');
    }
}
