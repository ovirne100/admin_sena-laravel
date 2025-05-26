

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Detalle del Área</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $area->name }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $area->id }}</p>
                {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            </div>
        </div>
        <a href="{{ route('area.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
        <a href="{{ route('area.edit', $area->id) }}" class="btn btn-primary mt-3">Editar Área</a>
    </div>
@endsection
