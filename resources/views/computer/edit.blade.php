@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editar Computador: {{ $computer->number }}</h1>

        <form action="{{ route('computer.update', $computer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="number" class="form-label">Numero</label>
                <input type="number" class="form-control" id="number" name="number" value="{{ $computer->number}}" required>
            </div>
            {{-- Agrega aquí más campos si tu modelo Computador tiene otras columnas --}}
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('computer.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
