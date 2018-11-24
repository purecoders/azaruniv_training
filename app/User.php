<?php

namespace App;

use App\Http\Controllers\helper\UserHelper;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable = [
        'name', 'is_male', 'email', 'mobile', 'student_number', 'national_code', 'password'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];




    public function studentCourses(){
      return $this->belongsToMany('App\Course', 'user_courses', 'student_id', 'course_id');
    }


    public function masterCourses(){
      return $this->hasMany('App\Course', 'master_id');
    }


    public function masterInfo(){
      return $this->hasOne('App\MasterExtraInfo', 'master_id');
    }

    public function messages(){
      return $this->hasMany('App\Message');
    }

    public function tickets(){
      return $this->hasMany('App\Ticket');
    }


    public function payments(){
      return $this->hasMany('App\Payment');
    }


    public function photo(){
      return $this->morphOne('App\Photo', 'imageable');
    }


    public function roles(){
      return $this -> belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }


    public static function masters(){
      $masters = array();
      $users = User::all();
      foreach ($users as $user){
        if(UserHelper::isMaster($user)){
          $masters[] = $user;
        }
      }

      return $masters;
    }

}
