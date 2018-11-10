<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'title', 'on_click'
    ];


    public function photo(){
      return $this->morphOne('App\Photo', 'imageable');
    }
}
