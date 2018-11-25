<?php

namespace App\Http\Controllers;

use App\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{

    public function update(Request $request)
    {
      $this->validate($request,[
        'address'       =>'required|max:250',
        'phone_number' =>'required|max:250',
        'email'       =>'required|max:250',
        'postal_code'    =>'required|max:250',
      ]);

      $address = $request->address;
      $phone_number = $request->phone_number;
      $email = $request->email;
      $postal_code = $request->postal_code;

      $address1 = SiteInfo::where('key', '=', 'address')->first();
      $phone_number1 = SiteInfo::where('key', '=', 'phone_number')->first();
      $email1 = SiteInfo::where('key', '=', 'email')->first();
      $postal_code1 = SiteInfo::where('key', '=', 'postal_code')->first();

      $address1->value = $address;
      $address1->save();
      $phone_number1->value = $phone_number;
      $phone_number1->save();
      $email1->value = $email;
      $email1->save();
      $postal_code1->value = $postal_code;
      $postal_code1->save();

      return redirect('/admin-contact-us');
    }

}
