@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-md-6">
                <h6 class="mb-3">مدیر و معاون فناوری</h6>
                {{-- For Show Server response when deleting is success if you want show this just remove d-none class --}}
                <div class="d-none alert alert-success alert-dismissible fade show" role="alert">
                    با موفقیت ثبت شد
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- For Show Server response when deleting is failed if you want show this just remove d-none class --}}
                <div class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                    خطا! مشکلی به وجود آمد
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" class="mb-5" onsubmit="return confirm('آیا از ویرایش مطمئن هستید؟')">
                    <div class="form-group row">
                        <label for="itAdmin" class="col-sm-4 col-form-label">مدیر امور فناوری</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="itAdmin" value="دکتر علی عجمی">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="itAssistant" class="col-sm-4 col-form-label">معاون پژوهش و فناوری</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="itAssistant" value="دکتر بهزاد سلطانی">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-sm btn-blue" value="ویرایش">
                </form>
            </div>
        </div>
    </div>
@endsection