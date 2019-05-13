<div class="">
    <div class="bg-blue footer-top"></div>
    <div id="contactUs" class="container-fluid bg-light-blue text-white p-5 rtl" style="font-size: .9em">
        <div class="row ">
            @php
                use App\SiteInfo;
                $siteInfos = SiteInfo::all();
                foreach ($siteInfos as $info){
                    if($info->key == 'phone_number') $phone_number = $info->value;
                    elseif ($info->key == 'email') $email = $info->value;
                    elseif ($info->key == 'address') $address = $info->value;
                    elseif ($info->key == 'postal_code') $postal_code = $info->value;
                }
            @endphp

            <div class="col-md-4">
                <div class="contact-details">
                    <h4 class="heading-primary">اطلاعات تماس</h4>
                    <ul class="contact">
                        <li><p><i class="fal fa-map-marker"></i> <strong>نشانی: </strong>{{$address}}</p></li>
                        <li><p><i class="fal fa-phone"></i> <strong>تلفن: </strong>{{$phone_number}} </p></li>
                        <li><p><i class="fal fa-envelope"></i> <strong>ایمیل: </strong>{{$email}} </p></li>
                        <li><p><i class="fal fa-envelope"></i> <strong>کد پستی: </strong>{{$postal_code}} </p></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h4 class="heading-primary">پیوند ها</h4>
                <ul class="nav nav-list  d-flex flex-column">
                    <li><a class="text-light hover-link" title="مرکز رشد و فناوری دانشگاه شهید مدنی آذربایجان"
                           href="http://research.azaruniv.ac.ir/">معاونت پژوهش و فناوری</a></li>
                    <li><a class="text-light hover-link" title="مرکز ارتباط با صنعت دانشگاه"
                           href="http://sanat.azaruniv.ac.ir/">مرکز ارتباط با صنعت دانشگاه</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4 class="heading-primary">پیوند های خارجی</h4>
                <ul class="nav nav-list d-flex flex-column">
                    <li><a target="_blank" class="text-light hover-link" title="صندوق نوآوری و شکوفایی" href="https://nsfund.ir">صندوق نوآوری و شکوفایی</a></li>
                    <li><a target="_blank" class="text-light hover-link" title="پارک علم و فناوری تبریز" href="http://www.eastp.ir">پارک علم و فناوری تبریز</a></li>
                    <li><a target="_blank" class="text-light hover-link" title="منطقه ویژه علم و فناوری ربع رشیدی" href="http://tabrizcoridor.ir">منطقه ویژه علم و فناوری ربع رشیدی</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-blue p-1 text-light" style="font-size: .8em">
        <div class="col-md-12 text-center pt-1">
            <p class="wow fadeInRight" data-wow-duration="1s" dir="rtl">
                طراحی و توسعه
                توسط
                <a target="#" class="text-success hover-link" href="http://www.ezitech.ir/">EziTech</a>
                <span class="mx-4 ">|   تمامی حقوق برای دانشگاه شهید مدنی آذربایجان می باشد 1397</span>

            </p>
        </div>
    </div>
</div>