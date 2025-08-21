@extends('layouts.app')

@section('template_title')
    {{ $asesoria->name ?? __('Show') . " " . __('Asesoria') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asesoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('asesorias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Carrera:</strong>
                                    {{ $asesoria->carrera }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Grupo:</strong>
                                    {{ $asesoria->grupo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cuatrimestre:</strong>
                                    {{ $asesoria->cuatrimestre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Materia:</strong>
                                    {{ $asesoria->materia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Maestro:</strong>
                                    {{ $asesoria->maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Hora:</strong>
                                    {{ $asesoria->fecha_hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $asesoria->observaciones }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
