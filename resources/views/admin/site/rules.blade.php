@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h6>قانون جدید</h6>
                <form action="{{route('admin-add-rule')}}" method="post">
                    <div class="form-group row">
                        <label for="ruleText" class="col-sm-2 col-form-label">متن قانون</label>
                        <div class="col-sm-10">
                            <textarea name="description" type="text" class="form-control" id="ruleText"
                                      placeholder="متن قانون را وارد کنید..." rows="5"></textarea>
                        </div>
                        @csrf
                        <input type="submit" class="btn btn-sm btn-blue" value="ثبت قانون جدید">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h6>لیست همه قوانین</h6>
                {{-- For Show Server response when deleting is success if you want show this just remove d-none class --}}
                <div class="d-none alert alert-success alert-dismissible fade show" role="alert">
                    قانون با موفقیت حذف شد
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- For Show Server response when deleting is failed if you want show this just remove d-none class --}}
                <div class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                    خطا! قانون حذف نشد
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <ul class="rules">

                    @foreach($rules as $rule)
                    <li class="d-flex justify-content-between">
                        <span>
                            {{$rule->description}}
                        </span>
                        <form class="d-inline" action="{{route('admin-remove-rule')}}" method="post" onsubmit="return confirm('آیا از حذف قانون مطمئن هستید؟')">
                            <input type="hidden"  name="id" value="{{$rule->id}}">
                            @csrf
                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                        </form>
                    </li>
                    @endforeach






                </ul>

            </div>
        </div>
    </div>
@endsection