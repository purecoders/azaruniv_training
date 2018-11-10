<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCourse extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'student_id', 'course_id'
    ];


    public function user(){
      return $this->belongsTo('App\User');
    }

    public function course(){
      return $this->belongsTo('App\Course');
    }
}
