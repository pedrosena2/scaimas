@extends('layouts.app')

@section('template_title')
    {{ $tipoUsuario->name ?? "{{ __('Show') Tipo Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo:</strong>
                            {{ $tipoUsuario->id_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Descripcion:</strong>
                            {{ $tipoUsuario->tipo_descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
