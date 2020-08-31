<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nama:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Guard Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    {!! Form::text('guard_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary btn-sm float-right">
        <i class="fa fa-save"></i> Simpan Data
    </button>
    <a href="{{ route('roles.index') }}" class="btn btn-default">Batal</a>
</div>
