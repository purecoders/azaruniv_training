<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 11/30/2018
 * Time: 7:05 PM
 */

namespace App\Http\Controllers\helper;

/*
کد جهت ارسال به درگاه پرداخت
*/
use SoapClient;

$sadad = new Sadad([
  'merchant_id'     => '???',
  'terminal_id'     => '???',
  'transaction_key' => '???'
]);


$request_key = $sadad->request(1, 1000, 'http://localhost/???.php');


// بررسی $request_key و انتقال کاربر به درگاه پرداخت
// ذخیره اطلاعات مورد نیاز مثل مبلغ، شماره سفارش و ... در دیتابیس
$sadad->redirect();


/*
کد جهت بررسی صحت تراکنش
*/
if ($sadad->verify($request_key, 1, 1000)) {
  // تراکنش موفق بود
  // ذخیره اطلاعات مورد نیاز در دیتابیس
} else {
  // تراکنش ناموفق بود
}


class Sadad {

  private $merchant_id;
  private $terminal_id;
  private $transaction_key;
  private $form;
  private $ref_no;


  private $wsdl_url = 'https://sadad.shaparak.ir/services/MerchantUtility.asmx?wsdl';


  public function __construct($params)
  {
    $this->merchant_id     = $params['merchant_id'];
    $this->terminal_id     = $params['terminal_id'];
    $this->transaction_key = $params['transaction_key'];
  }


  public function request($order_id, $amount, $callback)
  {
    $client = new SoapClient($this->wsdl_url);


    $result = $client->PaymentUtility(
      $this->merchant_id,
      $amount,
      $order_id,
      $this->transaction_key,
      $this->terminal_id,
      $callback);


    $this->form = $result['PaymentUtilityResult'];
    return $result['RequestKey'];
  }


  public function redirect()
  {
    echo $this->form.'</form>';
    echo '<script>window.onload=document.forms[0].submit();</script>';
  }


  public function verify($request_key, $order_id, $amount)
  {
    $client = new SoapClient($this->wsdl_url);


    $result = $client->CheckRequestStatus(
      $order_id,
      $this->merchant_id,
      $this->terminal_id,
      $this->transaction_key,
      $request_key,
      $amount);


    if ( ! empty($result) && isset($result['CheckRequestStatusResult']))
    {
      if ($result['CheckRequestStatusResult'] === 0)
      {
        $this->ref_no = $result['RetrivalRefNo'];
        return TRUE;
      }
      else
      {
        return FALSE;
      }
    }


    return FALSE;
  }


  public function get_ref_no()
  {
    return $this->ref_no;
  }
}