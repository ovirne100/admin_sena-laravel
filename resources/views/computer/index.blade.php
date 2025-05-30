@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Computadores</h1>

        <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">Crear Nuevo Computador</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Number</th>
                    <th>Brand</th>
                    <th>Acciones</th> {{-- Nueva columna para los botones --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td>

                            <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-info btn-sm">Ver Más</a>
                            <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" class="d-inline">
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
