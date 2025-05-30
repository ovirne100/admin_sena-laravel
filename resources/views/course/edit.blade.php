@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editar Course: {{ $course->course_number}}</h1>

        <form action="{{ route('course.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="course_number" class="form-label">Numero de curso</label>
                <input type="text" class="form-control" id="course_number" name="course_number" value="{{ $course->course_number }}" required>
            </div>
            <div class="mb-3">
                <label for="day" class="form-label">Día</label>
                <input type="text" class="form-control" id="day" name="day" value="{{ $course->day }}" required>
                
            </div>
            {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('course.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
