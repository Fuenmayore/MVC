@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Tarea</h1>
    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Crear Tarea</button>
    </form>
</div>
@endsection
