<div class="form-group row">
    <label for="inputName" class="col-sm-2 form-control-label">جنسیت</label>
    <div class="col-sm-4">
            <label class="md-check">
                {!! Form::radio('gender', '1', (old('gender') ==  '1'),['id'=>'gender','required']) !!}<i class="green"></i>  مرد
            </label><br />
            <label class="md-check">
                {!! Form::radio('gender', '0', (old('gender') ==  '0'), ['id'=>'gender','required']) !!}<i class="green"></i>  زن
            </label>
    </div>
    <label for="inputFathers_name" class="col-sm-2 form-control-label">نام پدر</label>
    <div class="col-sm-4">
        {!! Form::text('fathers_name', null, ['placeholder' => 'نام پدر','class' => 'form-control','id' => 'inputFathers_name']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputMeli" class="col-sm-2 form-control-label">کد ملی</label>
    <div class="col-sm-4">
        {!! Form::text('meli', null, ['placeholder' => '111111','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputMeli','required']) !!}
    </div>
    <label for="inputPlace" class="col-sm-2 form-control-label">محل تولد</label>
    <div class="col-sm-4">
        {!! Form::text('place', null, ['placeholder' => '1111111','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputPlace']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputAddress" class="col-sm-2 form-control-label">آدرس</label>
    <div class="col-sm-10">
        {!! Form::text('address', null, ['placeholder' => 'آدرس','class' => 'form-control','id' => 'inputAddress']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputMobile" class="col-sm-2 form-control-label">موبایل</label>
    <div class="col-sm-4">
        {!! Form::text('mobile', null, ['placeholder' => '09111111','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputMobile','required']) !!}
    </div>
    <label for="inputTel" class="col-sm-2 form-control-label">تلفن</label>
    <div class="col-sm-4">
        {!! Form::text('tel', null, ['placeholder' => '1111111','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputTel']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputBirthdate" class="col-sm-2 form-control-label">تاریخ تولد</label>
    <div class="col-sm-4">
        {!! Form::text('birthdate', null, ['placeholder' => '1333/12/12','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputBirthdate']) !!}
    </div>
    <label for="inputZipcode" class="col-sm-2 form-control-label">کدپستی</label>
    <div class="col-sm-4">
        {!! Form::text('zipcode', null, ['placeholder' => '1111111','class' => 'form-control text-left','dir' => 'ltr','id' => 'inputZipcode']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inpuAavatar" class="col-sm-2 form-control-label">آواتار</label>
    <div class="col-sm-4">
        {!! Form::text('avatar', null, ['placeholder' => 'آواتار','class' => 'form-control','id' => 'inpuAavatar']) !!}
    </div>
    <label for="inputDegree" class="col-sm-2 form-control-label">مدرک تحصیلی</label>
    <div class="col-sm-4">
        {!! Form::text('degree', null, ['placeholder' => 'لیسانس','class' => 'form-control','id' => 'inputDegree']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="inputAddress" class="col-sm-2 form-control-label">توضیحات</label>
    <div class="col-sm-10">
        {!! Form::textarea('comment', null, ['placeholder' => 'توضیحات','class' => 'form-control','id' => 'inputAddress']) !!}
    </div>
</div>