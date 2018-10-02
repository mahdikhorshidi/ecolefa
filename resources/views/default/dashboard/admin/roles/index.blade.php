@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h2>مدیریت نقش ها</h2>
            </div>
            <div class="box-tool">
                @permission(['role-create','admin'])
                <a class="btn btn-xs success" href="{{ route('dashboard.admin.roles.create') }}"> تعریف نقش جدید</a>
                @endpermission
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-striped b-t">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th width="280px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('dashboard.admin.roles.show',$role->id) }}">نمایش</a>
                            @permission(['role-edit','admin'])
                            <a class="btn btn-primary" href="{{ route('dashboard.admin.roles.edit',$role->id) }}">ویرایش</a>
                            @endpermission
                            @permission(['role-delete','admin'])
                            {!! Form::open(['method' => 'DELETE','route' => ['dashboard.admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endpermission
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <footer class="dker p-a">
                <div class="row">
                    {!! $roles->render() !!}
                </div>
            </footer>
        </div>
@endsection