<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard = 'user';

  public function services()
  {
      return $this->hasMany('App\Service');
  }

  public function user_favorites(){
      return $this->belongsToMany('App\Service','favourites');
  }

  public function user_archived(){
      return $this->belongsToMany('App\Service','archiveds');
  }
}
