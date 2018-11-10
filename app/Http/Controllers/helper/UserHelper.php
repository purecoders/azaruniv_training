<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 11/8/2018
 * Time: 4:22 PM
 */

namespace App\Http\Controllers\helper;


class UserHelper {

  public static function isAdmin($user){
    if($user === null){
      return false;
    }
    $roles = $user -> roles;
    foreach ($roles as $role){
      if ($role -> name == 'admin'){
        return true;
      }
    }
    return false;
  }




  public static function isMaster($user){
    if($user === null){
      return false;
    }
    $roles = $user -> roles;
    foreach ($roles as $role){
      if ($role -> name == 'master'){
        return true;
      }
    }
    return false;
  }


}