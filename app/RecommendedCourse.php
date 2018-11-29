<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecommendedCourse extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'name'];


    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
}
