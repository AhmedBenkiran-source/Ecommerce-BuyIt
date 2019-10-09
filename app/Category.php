<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    public function Getproduct(){
      return $this->belongsTo('App\Product','Product');
   }
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
