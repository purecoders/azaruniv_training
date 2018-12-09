<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

  public function delete(){
    $this->user_course()->delete();
    $this->tickets()->delete();
    $this->recommendedCourses()->delete();

    parent::delete();
  }


  protected $fillable = [
        'name', 'is_male', 'major', 'email', 'mobile', 'student_number', 'national_code', 'password'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];




    public function studentCourses(){
      return $this->belongsToMany('App\Course', 'user_courses', 'student_id', 'course_id')->orderBy('id', 'desc');
    }

    public function user_course(){
      return $this->hasMany('App\UserCourse' , 'student_id');
    }


    public function masterCourses(){
      return $this->hasMany('App\Course', 'master_id')->orderBy('id', 'desc');
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
      $role = Role::where('name', '=', 'master')->first();
      $masters = $role->users;
      return $masters;
    }


    public function newSendedTickets(){
      return $this->hasMany('App\Ticket')
        ->where('is_user_sent', '=', 1)
        ->where('is_seen', '=', 0);
    }


    public function recommendedCourses(){
      return $this->hasMany('App\RecommendedCourse');
    }



    public function hasCertificate($course_id){
      $userCourse = UserCourse::where('student_id', '=', $this->id)->where('course_id', '=', $course_id)->first();
      if($userCourse !== null){

        if($userCourse->has_certificate == 1){
          return true;
        }else{
          return false;
        }

      }else{
        return false;
      }
    }




}
