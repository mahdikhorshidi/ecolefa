@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h2>تعریف نقش جدید</h2>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="btn btn-sm accent nav-link" href="{{ route('dashboard.admin.roles.index') }}"> بازگشت</a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>اوووه!</strong> در ورودی ها مشکل وجود دارد.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(array('route' => 'dashboard.admin.roles.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group row">
                            <label for="display_name" class="col-sm-3 form-control-label"><strong>نام:</strong></label>
                            <div class="col-sm-9">
                                {!! Form::text('name', null, array('placeholder' => 'نام','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="display_name" class="col-sm-3 form-control-label"><strong>نام نمایشی:</strong></label>
                            <div class="col-sm-9">
                                {!! Form::text('display_name', null, array('placeholder' => 'نام','class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 form-control-label"><strong>توضیحات:</strong></label>
                            <div class="col-sm-9">
                                {!! Form::textarea('description', null, array('placeholder' => 'توضیحات','class' => 'form-control','style'=>'height:100px')) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 form-control-label"><strong>دسترسی:</strong></label>
                            <div class="col-lg-10">
                                <div class="row">
                                    @foreach($permission as $value)
                                        <div class="col-sm-2">
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->display_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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