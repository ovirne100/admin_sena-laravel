
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('course.store') }}">
    @csrf
<div class="mb-3">
    <label for="course_number" class="form-label">Número de Curso</label>
    <input type="text" class="form-control" id="course_number" name="course_number" required>
</div>
    <div class="mb-3">
    <label for="" class="form-label">day</label>
    <input type="text" class="form-control" id="day" name="day" required>
</div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
