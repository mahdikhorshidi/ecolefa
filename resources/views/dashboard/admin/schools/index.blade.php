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
                    <a type="button" href="/dashboard/admin/schools/create" class="btn btn-sm success">ایجاد</a>
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
                    @foreach($schools as $index => $school)
                        <tr>
                            <td>{{ $school->id }}</td>
                            <td>{{ $school->name }}</td>
                            <td>{{ $school->slug }}</td>
                            <td>{{ $school->updated_at }}</td>
                            <td>{{ $school->created_at }}</td>
                            <td>
                                <div class="btn-group pull-right">
                                    <a type="button" class="btn btn-sm info" href="/dashboard/admin/schools/{{$school->slug}}"><i class="fa fa-eye"></i></a>
                                    <a type="button" class="btn btn-sm warning" href="/dashboard/admin/schools/{{$school->slug}}/edit"><i class="fa fa-pencil"></i></a>
                                    <button type="button" class="btn btn-sm danger" @click.prevent="deleteUser(user)"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="dker p-a">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                    </div>
                    <div class="col-sm-4 text-center">
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        {{ $schools->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

