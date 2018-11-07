<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'text', 'is_user_sent', 'is_seen'
    ];


    public function user(){
      return $this->belongsTo('App\User');
    }
}
