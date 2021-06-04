<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $guarded = [];

    public function type(){
      return $this->belongsTo('App\Type');
    }
     public function user(){
      return $this->belongsTo('App\User');
    }
    public function genre(){
        return $this->belongsTo('App\Genre');
    }
    public function brand(){
    return $this->belongsTo('App\Brand');
    }
}
