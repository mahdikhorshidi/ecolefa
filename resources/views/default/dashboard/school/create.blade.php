@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>ثبت مدرسه جدید</h3>
                <small>در این بخش شما می توانید کاربر جدید را به سیستم اضافه نمایید.</small>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard/school" class="btn btn-sm primary pull-right">بازگشت</a>
                </div>
            </div>
            <div class="box-divider m-0"></div>
            {!! Form::open(['route' => 'dashboard.school.store', 'method' => 'post']) !!}
            <div class="box-body">
                @include('dashboard.school.form')
            </div>
            <div class="box-footer text-left">
                <label class="md-switch pull-left">
                    {!! Form::checkbox('visible', null) !!}
                    <i class="blue"></i> فعال؟
                </label>
                {{ Form::submit('ارسال',['class' => 'btn white']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

