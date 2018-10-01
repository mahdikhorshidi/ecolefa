@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>لیست مدارس</h3>
            </div>
            <div class="box-tool">
                <div class="btn-group pull-right">
                    <a type="button" href="/dashboard" class="btn btn-sm primary pull-right">بازگشت</a>
                </div>
            </div>
            <div class="box-divider m-0"></div>
            <div class="table-responsive">
                <table class="table table-striped b-t">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام مدرسه</th>
                        <th>زیر دامنه</th>
                        <th>دامنه</th>
                        <th>تاریخ بروزرسانی</th>
                        <th style="width:50px;">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $school->id }}</td>
                            <td>{{ $school->name }}</td>
                            <td>{{ $school->slug }}</td>
                            <td>{{ $school->updated_at }}</td>
                            <td>{{ $school->created_at }}</td>
                            <td>
                                {{ Form::model($school, array('route' => array('dashboard.school.update', $school->slug), 'method' => 'DELETE')) }}
                                <div class="btn-group pull-right">
                                    <a type="button" class="btn btn-sm info" href="/dashboard/school"><i class="fa fa-eye"></i></a>
                                    <a type="button" class="btn btn-sm warning" href="/dashboard/school/edit"><i class="fa fa-pencil"></i></a>
                                    {{ Form::submit('&#215;',['class' => 'btn btn-sm danger']) }}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

