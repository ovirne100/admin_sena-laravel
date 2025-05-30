
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('teacher.store') }}">
    @csrf
<div class="mb-3">
    <label for="course_number" class="form-label">Nombre del teacher</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>

 <div class="mb-3">
    <label for="" class="form-label">email</label>
<input type="text" name="email" value="{{ old('email') }}" required>
</div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
