<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
      {!! Form::label('password', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary btn-sm float-right">
        <i class="fa fa-save"></i> Simpan Data
    </button>
    <a href="{!! route('users.index') !!}" class="btn btn-default">Batal</a>
</div>
