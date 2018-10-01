@extends('layouts.app')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h2> نمایش نقش</h2>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="btn btn-sm accent nav-link" href="{{ route('dashboard.admin.roles.index') }}"> بازگشت</a>
                    </li>
                </ul>
            </div>
            <div class="box-divider m-a-0"></div>
            <div class="box-body">
                <div class="padding">
                    <div class="form-group">
                        <strong>نام:</strong>
                        {{ $role->name }}
                    </div>
                    <div class="form-group row">
                        <strong>دسترسی ها:</strong>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label success p-a-sm m-a-xs">{{ $v->name }}</label>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection