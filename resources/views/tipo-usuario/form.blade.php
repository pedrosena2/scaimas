<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_tipo') }}
            {{ Form::text('id_tipo', $tipoUsuario->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo']) }}
            {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_descripcion') }}
            {{ Form::text('tipo_descripcion', $tipoUsuario->tipo_descripcion, ['class' => 'form-control' . ($errors->has('tipo_descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Descripcion']) }}
            {!! $errors->first('tipo_descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>