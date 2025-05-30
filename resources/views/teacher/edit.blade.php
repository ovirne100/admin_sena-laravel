@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editar teacher: {{ $teacher->name}}</h1>

        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="course_number" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
            </div>
            <div class="mb-3">
                <label for="day" class="form-label">Email</label>
               <input type="text" name="email" value="{{ $teacher->email }}" required>

            </div>
            {{-- Agrega aquí más campos si tu modelo Area tiene otras columnas --}}
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
