<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    /**
      * The table associated with the model.
      *
      * @var string
      */
     protected $dates = ['deleted_at'];

     public function GetNameCate(){
        return $this->belongsTo('App\Category','Category');
     }
     public function GetNameBrand(){
            return $this->belongsTo('App\Brand','Brand');
     }
     public function GetNameProvider(){
        return $this->belongsTo('App\Provider','Provider');
     }
  

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
    
}
