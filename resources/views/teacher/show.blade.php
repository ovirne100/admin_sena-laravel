

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Detalle del Teacher</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $teacher->name }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $teacher->id }}</p>
                <p class="card-text"><strong>Nombre:</strong> {{ $teacher->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $teacher->email }}</p>
                {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            </div>
        </div>
        <a href="{{ route('teacher.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
        <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary mt-3">Editar Área</a>
    </div>
@endsection
