<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'key', 'value'
    ];

}
