@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tareas</h1>
    <a href="{{ route('tareas.create') }}" class="btn btn-primary">Agregar Tarea</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Completada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->completada ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
