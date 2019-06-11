<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    public function user() {return $this->belongsTo('App\User');}
    
    public function product() {return $this->belongsTo('App\Product');}
    
    public function offer_stars() {return $this->hasMany('App\Star');}
}

