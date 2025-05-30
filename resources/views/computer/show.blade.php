

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Detalle del computador</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $computer->number }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $computer->id }}</p>
                {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            </div>
        </div>
        <a href="{{ route('computer.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
        <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-primary mt-3">Editar Área</a>
    </div>
@endsection
