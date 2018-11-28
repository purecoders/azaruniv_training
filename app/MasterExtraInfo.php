<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterExtraInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'master_id', 'content', 'docs_path'
    ];

}
