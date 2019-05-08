<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    public function user_on_b() {return $this->belongsTo('App\User');}
    public function user_on_s() {return $this->belongsTo('App\Offer');}
    public function product_id() {return $this->belongsTo('App\Product');}
}

