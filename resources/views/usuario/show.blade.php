@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $usuario->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo:</strong>
                            {{ $usuario->id_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $usuario->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Docuemento:</strong>
                            {{ $usuario->numero_docuemento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $usuario->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $usuario->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Barrio:</strong>
                            {{ $usuario->barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Celular:</strong>
                            {{ $usuario->numero_celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Institucional:</strong>
                            {{ $usuario->correo_institucional }}
                        </div>
                        <div class="form-group">
                            <strong>Pass:</strong>
                            {{ $usuario->pass }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
