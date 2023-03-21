<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $usuario->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo') }}
            {{ Form::text('id_tipo', $usuario->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo']) }}
            {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_documento') }}
            {{ Form::text('tipo_documento', $usuario->tipo_documento, ['class' => 'form-control' . ($errors->has('tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_docuemento') }}
            {{ Form::text('numero_docuemento', $usuario->numero_docuemento, ['class' => 'form-control' . ($errors->has('numero_docuemento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Docuemento']) }}
            {!! $errors->first('numero_docuemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $usuario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $usuario->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $usuario->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('barrio') }}
            {{ Form::text('barrio', $usuario->barrio, ['class' => 'form-control' . ($errors->has('barrio') ? ' is-invalid' : ''), 'placeholder' => 'Barrio']) }}
            {!! $errors->first('barrio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_celular') }}
            {{ Form::text('numero_celular', $usuario->numero_celular, ['class' => 'form-control' . ($errors->has('numero_celular') ? ' is-invalid' : ''), 'placeholder' => 'Numero Celular']) }}
            {!! $errors->first('numero_celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_institucional') }}
            {{ Form::text('correo_institucional', $usuario->correo_institucional, ['class' => 'form-control' . ($errors->has('correo_institucional') ? ' is-invalid' : ''), 'placeholder' => 'Correo Institucional']) }}
            {!! $errors->first('correo_institucional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pass') }}
            {{ Form::text('pass', $usuario->pass, ['class' => 'form-control' . ($errors->has('pass') ? ' is-invalid' : ''), 'placeholder' => 'Pass']) }}
            {!! $errors->first('pass', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>