<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

  public function services()
  {
      return $this->hasMany('App\Service');
  }

}
