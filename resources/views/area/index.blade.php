@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Áreas</h1>

        <a href="{{ route('area.create') }}" class="btn btn-warning btn-sm mb-4">Crear Nueva Área</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th> {{-- Nueva columna para los botones --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        <td>

                            <a href="{{ route('area.show', $area->id) }}" class="btn btn-info btn-sm">Ver Más</a>
                            <a href="{{ route('area.edit', $area->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('area.destroy', $area->id) }}" method="POST" class="d-inline">
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
