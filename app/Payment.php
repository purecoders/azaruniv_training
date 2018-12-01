<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'course_id', 'user_id', 'amount', 'is_success', 'bank_receipt'
    ];

  public function user(){
    return $this->belongsTo('App\User')->withTrashed();
  }

  public function course(){
    return $this->belongsTo('App\Course')->withTrashed();
  }
}
