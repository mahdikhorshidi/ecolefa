@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>مشخصات کاربر</h3>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard/admin/users" class="btn btn-sm primary pull-right">بازگشت</a>
                    <a type="button" href="/dashboard/admin/users/{{$user->id}}/edit" class="btn btn-sm warning">ویرایش</a>
                    <a type="button" href="/dashboard/admin/users/create" class="btn btn-sm success">ایجاد</a>
                </div>
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
                        <small class="text-muted">کلمه عبور</small>
                        <div class="_500">******</div>
                    </div>
                    <div class="col-xs-6">
                        <small class="text-muted">تاریخ عضویت</small>
                        <div class="_500">{{ $user->created_at }}</div>
                    </div>
                </div>
                <div>
                    <small class="text-muted">Bio</small>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue.</div>
                </div>
            </div>
        </div>
    </div>
@endsection

