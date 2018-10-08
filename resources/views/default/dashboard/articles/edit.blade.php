@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>ویرایش کاربر #{{ $article->id }}</h3>
                <small>در این بخش شما می توانید کاربر جدید را به سیستم اضافه نمایید.</small>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard/articles" class="btn btn-sm primary pull-right">بازگشت</a>
                    <a type="button" href="/dashboard/articles/{{$article->id}}" class="btn btn-sm warning">نمایش</a>
                    <a type="button" href="/dashboard/articles/create" class="btn btn-sm success">ایجاد</a>
                </div>
            </div>
            <div class="box-divider m-0"></div>
            {{ Form::model($article, array('route' => array('dashboard.articles.update', $article->id), 'method' => 'PUT')) }}
            <div class="box-body">
                @include('dashboard.articles.form')
            </div>
            <div class="box-footer text-left">
                {{ Form::submit('ارسال',['class' => 'btn white']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

