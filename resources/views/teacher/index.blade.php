@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Teachers</h1>

        <a href="{{ route('teacher.create') }}" class="btn btn-warning btn-sm mb-4">Crear Nuevo teacher</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Acciones</th> {{-- Nueva columna para los botones --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>
                            <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info btn-sm">Ver Más</a>
                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" class="d-inline">
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
