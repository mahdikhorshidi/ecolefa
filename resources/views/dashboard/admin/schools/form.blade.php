<div class="form-group row">
    <label for="inputName" class="col-sm-2 form-control-label">نام مدرسه</label>
    <div class="col-sm-10">
        {!! Form::text('name', null, ['placeholder' => 'نام مدرسه','class' => 'form-control','required']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputName" class="col-sm-2 form-control-label">صاحب امتیار</label>
    <div class="col-sm-10">
        {!! Form::select('user_id', \App\User::pluck('name', 'id')->all() , NULL, ['placeholder' => 'صاحب امتیار','class' => 'form-control','required']) !!}
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">تاریخ انقضا</label>
    <div class="col-sm-10">
        {!! Form::text('expaire_date', null, ['placeholder' => 'تاریخ انقضا','class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 form-control-label">توضیحات</label>
    <div class="col-sm-10">
        {!! Form::textarea('detail', null, ['placeholder' => 'توضیحات','class' => 'form-control']) !!}

    </div>
</div>