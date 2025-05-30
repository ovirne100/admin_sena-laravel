@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('area.store') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
