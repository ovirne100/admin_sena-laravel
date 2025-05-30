@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Detalle del course</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $course->number }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $course->id }}</p>
                <p class="card-text"><strong>Número de Curso:</strong> {{ $course->course_number }}</p>
                <p class="card-text"><strong>Día:</strong> {{ $course->day }}</p>
                {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            </div>
        </div>
        <a href="{{ route('course.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary mt-3">Editar Área</a>
    </div>
@endsection
