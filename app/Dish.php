<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{

  protected $guarded=[];

  public function comments()

  {

      return $this->hasMany(Comment::class);

  }
}
