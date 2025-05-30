@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('computer.store') }}">
    @csrf
    <div class="mb-3">
        <label for="number" class="form-label">Number</label>
        <input type="number" class="form-control" id="number" name="number" required>
    </div>
    <div class="mb-3">
    <label for="brand" class="form-label">Marca</label>
    <input type="text" class="form-control" id="brand" name="brand" required>
</div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection


