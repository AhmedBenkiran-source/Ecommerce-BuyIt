<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';



    public function GetCountry(){
        return $this->belongsTo('App\Country','Country');
     }
   
       /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
