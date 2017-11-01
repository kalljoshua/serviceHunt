<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';

    public function service()
      {
          return $this->belongsTo('App\Service','service_id');
      }

    // user who favourited
    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }
}
