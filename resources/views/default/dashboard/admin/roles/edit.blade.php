@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h2>ویرایش کاربر</h2>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="btn btn-sm accent nav-link" href="{{ route('roles.index') }}"> بازگشت</a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>اوووه!</strong> تعدادی مشکل در ورودی ها به وجود آمده.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 form-control-label"><strong>نام:</strong></label>
                            <div class="col-sm-9">
                                {!! Form::text('display_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 form-control-label"><strong>توضیحات:</strong></label>
                            <div class="col-sm-9">
                                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 form-control-label"><strong>دسترسی:</strong></label>
                            <div class="col-sm-9">
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                        {{ $value->display_name }}</label>
                                    <br/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection