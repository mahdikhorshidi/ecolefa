@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">داشبورد</div>
                    <div class="box-divider m-0"></div>
                    <div class="box-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        شما وارد شده اید!ddddddddddddddd
                        @if(!isset(auth()->user()->profile->id))
                            <div class="alert alert-warning m-t">
                                <strong>هشدار!</strong> شما هنوز پروفایل خود را کامل نکرده اید.
                                لذا امکان هیج کاری وجود ندارد.
                                جهت تکمیل پروفایل به صفحه  <a href="/admin/profile/create" class="btn btn-xs success">تکیمل پروفایل</a>  مراجعه نمایید.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
