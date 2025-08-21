<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="carrera" class="form-label">{{ __('Carrera') }}</label>
            <input type="text" name="carrera" class="form-control @error('carrera') is-invalid @enderror" value="{{ old('carrera', $asesoria?->carrera) }}" id="carrera" placeholder="Carrera">
            {!! $errors->first('carrera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grupo" class="form-label">{{ __('Grupo') }}</label>
            <input type="text" name="grupo" class="form-control @error('grupo') is-invalid @enderror" value="{{ old('grupo', $asesoria?->grupo) }}" id="grupo" placeholder="Grupo">
            {!! $errors->first('grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cuatrimestre" class="form-label">{{ __('Cuatrimestre') }}</label>
            <input type="text" name="cuatrimestre" class="form-control @error('cuatrimestre') is-invalid @enderror" value="{{ old('cuatrimestre', $asesoria?->cuatrimestre) }}" id="cuatrimestre" placeholder="Cuatrimestre">
            {!! $errors->first('cuatrimestre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="materia" class="form-label">{{ __('Materia') }}</label>
            <input type="text" name="materia" class="form-control @error('materia') is-invalid @enderror" value="{{ old('materia', $asesoria?->materia) }}" id="materia" placeholder="Materia">
            {!! $errors->first('materia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="maestro" class="form-label">{{ __('Maestro') }}</label>
            <input type="text" name="maestro" class="form-control @error('maestro') is-invalid @enderror" value="{{ old('maestro', $asesoria?->maestro) }}" id="maestro" placeholder="Maestro">
            {!! $errors->first('maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_hora" class="form-label">{{ __('Fecha Hora') }}</label>
            <input type="text" name="fecha_hora" class="form-control @error('fecha_hora') is-invalid @enderror" value="{{ old('fecha_hora', $asesoria?->fecha_hora) }}" id="fecha_hora" placeholder="Fecha Hora">
            {!! $errors->first('fecha_hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $asesoria?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>