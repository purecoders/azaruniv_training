<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'course_id', 'type', 'user_id', 'is_student_sent', 'text', 'is_seen'
    ];


    public function user(){
      return $this->belongsTo('App\User');
    }

    public function course(){
      return $this->belongsTo('App\Course');
    }
}
