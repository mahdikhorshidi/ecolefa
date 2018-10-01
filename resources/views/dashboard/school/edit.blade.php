@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>ثبت پروفایل</h3>
                <small>در این بخش شما می توانید کاربر جدید را به سیستم اضافه نمایید.</small>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard/school" class="btn btn-sm primary pull-right">بازگشت</a>
                </div>
            </div>
            <div class="box-divider m-0"></div>
            {{ Form::model($school, array('route' => array('dashboard.school.update', $school->slug), 'method' => 'PUT')) }}
            <div class="box-body">
                @include('dashboard.school.form')
            </div>
            <div class="box-footer text-left">
                {{ Form::submit('ارسال',['class' => 'btn white']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection