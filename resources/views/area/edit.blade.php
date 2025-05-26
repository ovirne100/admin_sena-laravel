@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editar Área: {{ $area->name }}</h1>

        <form action="{{ route('area.update', $area->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $area->name }}" required>
            </div>
            {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('area.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
