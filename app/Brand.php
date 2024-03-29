<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brand';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
     
}
