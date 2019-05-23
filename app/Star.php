<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Star extends Model
{
    public function star_of_offer() {return $this->belonsTo('App\Offer');}
}

