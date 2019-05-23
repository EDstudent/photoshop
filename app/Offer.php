<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    public function user_on_p() {return $this->belongsTo('App\User');}
    
    public function product_on_u() {return $this->belongsTo('App\Product');}
    
    public function offer_stars() {return $this->hasMany('App\Star');}
}

