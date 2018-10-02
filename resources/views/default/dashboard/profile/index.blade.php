@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3> پروفایل</h3>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard" class="btn btn-sm primary pull-right">بازگشت</a>
                    <a type="button" href="/dashboard/profile/edit" class="btn btn-sm warning">ویرایش</a>
                </div>
            </div>
            <div class="box-divider m-0"></div>
            <div class="box-header">
                <h3>مشخصات کاربری</h3>
            </div>
            <div class="box-body">
                <div class="row m-b">
                    <div class="col-xs-6">
                        <small class="text-muted">نام</small>
                        <div class="_500">{{ $user->name }}</div>
                    </div>
                    <div class="col-xs-6">
                        <small class="text-muted">ایمیل</small>
                        <div class="_500">{{ $user->email }}</div>
                    </div>
                </div>
                <div class="row m-b">
                    <div class="col-xs-6">
                        <small class="text-muted">جنسیت</small>
                        <div class="_500">{{ $profile->gender == 1 ? 'مرد' : 'زن' }}</div>
                    </div>
                    <div class="col-xs-6">
                        <small class="text-muted">نام پدر</small>
                        <div class="_500">{{ $profile->fathers_name }}</div>
                    </div>
                </div>
                <div class="row m-b">
                    <div class="col-xs-6">
                        <small class="text-muted">کد ملی</small>
                        <div class="_500">{{ $profile->meli}}</div>
                    </div>
                    <div class="col-xs-6">
                        <small class="text-muted">محل تولد</small>
                        <div class="_500">{{ $profile->place }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

