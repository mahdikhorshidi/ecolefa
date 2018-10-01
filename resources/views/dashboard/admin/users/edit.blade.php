@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>ویرایش کاربر #{{ $user->id }}</h3>
                <small>در این بخش شما می توانید کاربر جدید را به سیستم اضافه نمایید.</small>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard/admin/users" class="btn btn-sm primary pull-right">بازگشت</a>
                    <a type="button" href="/dashboard/admin/users/{{$user->id}}" class="btn btn-sm warning">نمایش</a>
                    <a type="button" href="/dashboard/admin/users/create" class="btn btn-sm success">ایجاد</a>
                </div>
            </div>
            <div class="box-divider m-0"></div>
            {{ Form::model($user, array('route' => array('dashboard.admin.users.update', $user->id), 'method' => 'PUT')) }}
            <div class="box-body">
                @include('dashboard.admin.users.form')
            </div>
            <div class="box-footer text-left">
                {{ Form::submit('ارسال',['class' => 'btn white']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

