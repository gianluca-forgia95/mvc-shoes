<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];

    public function shoes(){
      return $this->hasMany('App\Shoe');
    }
}
