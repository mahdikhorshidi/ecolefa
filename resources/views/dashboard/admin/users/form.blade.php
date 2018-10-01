<div class="form-group row">
    <label for="inputName" class="col-sm-2 form-control-label">نام</label>
    <div class="col-sm-10">
        {!! Form::text('name', null, ['placeholder' => 'نام و نام خانوادگی','class' => 'form-control','id' => 'inputName','required']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 form-control-label">ایمیل</label>
    <div class="col-sm-10">
        {!! Form::text('email', null, ['placeholder' => 'کلمه عبور','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputEmail','required']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 form-control-label">کلمه عبور</label>
    <div class="col-sm-10">
        {!! Form::password('password', ['placeholder' => 'کلمه عبور','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputPassword','required']) !!}
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">تایید کلمه عبور</label>
    <div class="col-sm-10">
        {!! Form::password('confirm-password', ['placeholder' => 'تایید کلمه عبور','class' => 'form-control text-left','dir' => 'ltr']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 form-control-label">نقش ها</label>
    <div class="col-sm-10">
        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
    </div>
</div>
