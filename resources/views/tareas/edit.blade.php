@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarea</h1>
    <form action="{{ route('tareas.update', $tarea) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $tarea->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $tarea->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="completada">Completada</label>
            <input type="checkbox" name="completada" value="1" {{ $tarea->completada ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-success">Actualizar Tarea</button>
    </form>
</div>
@endsection
