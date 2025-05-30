@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Listado de course</h1>

        <a href="{{ route('course.create') }}" class="btn btn-warning btn-sm mb-4">Crear Nuevo curso</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre_course</th>
                    <th>dia</th>
                    <th>Acciones</th> {{-- Nueva columna para los botones --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                        <td>

                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-info btn-sm">Ver Más</a>
                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
