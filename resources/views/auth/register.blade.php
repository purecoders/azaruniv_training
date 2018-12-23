@extends('layouts.masterLayout')

@section('content')
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="bg-info p-2 m-0 text-white">
                        اگر قبلا ثبت نام کرده اید
                        <a href="{{route('login')}}" class="btn btn-outline-light"> وارد شوید</a>
                    </div>
                    <div class="card-header">ثبت نام</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">نام و نام خانوادگی</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required />

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="is_male" class="col-md-4 col-form-label text-md-right">جنسیت</label>

                                <div class="col-md-6">
                                    <select class="form-control form-control-sm{{ $errors->has('isMale') ? ' is-invalid' : '' }}" name="is_male" value="{{ old('is_male') }}" required />
                                        <option value="1">مرد</option>
                                        <option value="0">زن</option>
                                    </select>
                                    @if ($errors->has('is_male'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('is_male') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="major" class="col-md-4 col-form-label text-md-right">رشته تحصیلی</label>

                                <div class="col-md-6">
                                    <input id="major" type="text" class="form-control{{ $errors->has('major') ? ' is-invalid' : '' }}" name="major" value="{{ old('major') }}" required />

                                    @if ($errors->has('major'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('major') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">آدرس ایمیل</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required/>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">شماره موبایل</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="tel" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required />

                                    @if ($errors->has('mobile'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="student_number" class="col-md-4 col-form-label text-md-right">شماره دانشجویی</label>

                                <div class="col-md-6">
                                    <input  id="student_number" placeholder="اگر دانشجو هستید این قسمت را پر کنید" type="number" class="form-control{{ $errors->has('student_number') ? ' is-invalid' : '' }}" name="student_number" value="{{ old('student_number') }}"  />

                                    @if ($errors->has('student_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('student_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="national_code" class="col-md-4 col-form-label text-md-right">کد ملی</label>

                                <div class="col-md-6">
                                    <input id="national_code" type="number" class="form-control{{ $errors->has('national_code') ? ' is-invalid' : '' }}" name="national_code" value="{{ old('national_code') }}" required />

                                    @if ($errors->has('national_code'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('national_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">رمز عبور</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تکرار رمز</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required/>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="rules" class="col-md-4 col-form-label text-md-right">قوانین</label>
                                <div class="col-md-6 ">
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required/>
                                        <label class="form-check-label" for="defaultCheck1">
                                            قوانین را قبول می کنم
                                            <a href="#" data-toggle="modal" data-target="#rulesModal"> (مشاهده قوانین)</a>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"   class="btn btn-success"><i class="fal fa-user-plus"></i> ثبت نام</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="rulesModalTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rulesModalTitle">قوانین سایت</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body rtl">
                            @php
                                $rules = \App\Rule::all();
                            @endphp
                            <ul class="rules">
                                @foreach($rules as $rule)
                                <li>{{$rule->description}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class=" modal-footer">
                            <button type="button"  class="btn btn-sm btn-secondary mr-auto" data-dismiss="modal">بستن</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection