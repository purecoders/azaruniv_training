<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 12/1/2018
 * Time: 1:54 AM
 */

namespace App\Http\Controllers\helper;


use function GuzzleHttp\Psr7\str;

class MyCrypt {


  const keyPlain = '202cb962ac59075b964b07152d234b70202cb962';



  //the bank keys encoded with base_64.so we may decode it in function
  public static function encrypt_pkcs7($str, $key = null){
    if (is_null($key)){
      $key = self::generateKey();
    }

    $key = base64_decode($key);
    $ciphertext = OpenSSL_encrypt($str,"DES-EDE3", $key, OPENSSL_RAW_DATA);
    return base64_encode($ciphertext);
  }



  //the bank keys encoded with base_64.so we may decode it in function
  public static function decrypt_pkcs7($encrypted, $key = null){
    if (is_null($key)){
      $key = self::generateKey();
    }

    $key = base64_decode($key);
    $encrypted = base64_decode($encrypted);
    $ciphertext = OpenSSL_decrypt($encrypted,"DES-EDE3", $key, OPENSSL_RAW_DATA);
    return $ciphertext;
  }




  private static function generateKey(){
    $key = md5(self::keyPlain);
    $key .= substr($key, 3, 8);
    return $key;
  }

}