<div class="form-group row">
    <label for="inputName" class="col-sm-2 form-control-label">عنوان</label>
    <div class="col-sm-10">
        {!! Form::text('title', null, ['placeholder' => 'عنوان','class' => 'form-control','required']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 form-control-label">ایمیل</label>
    <div class="col-sm-10">
        {!! Form::textarea('body', null, ['class' => 'form-control','required']) !!}
    </div>
</div>