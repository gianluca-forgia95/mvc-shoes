<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];

    public function shoes(){
      return $this->hasMany('App\Shoe');
    }
    public function users(){
        return $this->hasMany('App\User');
      }
}
