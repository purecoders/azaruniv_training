<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'imageable_id', 'imageable_type', 'path', 'url'
    ];


    const USER_MALE_AVATAR_PATH = 'uploads/images/users/avatar_male.png';
    const USER_FEMALE_AVATAR_PATH = 'uploads/images/users/avatar_female.png';
    const MASTER_MALE_AVATAR_PATH = 'uploads/images/users/avatar_master_male.png';
    const MASTER_FEMALE_AVATAR_PATH = 'uploads/images/users/avatar_master_female.png';

    const USER_AVATAR_HEIGHT = 200;
    const USER_AVATAR_WIDTH = 200;


}
