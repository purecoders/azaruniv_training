<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')
</head>
<body class="rtl">
 <div class="mt-5 ">
     <table class="m-auto response-table bg-light" border="1" >
         <thead class="">
         <tr >
             <th class="py-3 text-center " scope="col" colspan="2">پرداخت با موفقیت انجام شد</th>
         </tr>
         </thead>
         <tbody>
            <tr>
                <th class="p-2" scope="row" >مبلغ</th>
                <td class="text-center">62،500 تومان</td>
            </tr>
            <tr>
                <th class="p-2" scope="row" >شماره مرجع</th>
                <td class="text-center">51661251354005</td>
            </tr>
            <tr>
                <th class="p-2" scope="row" >شماره پیگیری</th>
                <td class="text-center">911027467605</td>
            </tr>
         </tbody>

     </table>
     <div class="text-center mt-2">
         <a  href="{{route('user-courses')}}" class="m-auto btn btn-sm btn-blue">بازگشت به پروفایل</a>
     </div>
 </div>
</body>
</html>