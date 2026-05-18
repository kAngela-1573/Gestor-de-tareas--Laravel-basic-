@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <a href="{{ route('tasks.create') }}" style="background: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px;">+ Nueva Tarea</a>
    </div>

    @forelse($tasks as $task)
        <div class="task-card">
            <h3>{{ $task->title }}</h3>
            <p><strong>Descripción:</strong> {{ $task->description }}</p>
            <p><strong>Fecha límite:</strong> {{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</p>
            <p><strong>Estado:</strong> 
                @if($task->due_date < now())
                    <span style="color: red;">⏰ Vencida</span>
                @else
                    <span style="color: green;">✅ Pendiente</span>
                @endif
            </p>
            
            <a href="{{ route('tasks.edit', $task) }}" class="btn-edit" style="display: inline-block; padding: 5px 10px; text-decoration: none; border-radius: 4px;">✏️ Editar</a>
            
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete" onclick="return confirm('¿Eliminar esta tarea?')">🗑️ Eliminar</button>
            </form>
        </div>
    @empty
        <p>No hay tareas pendientes. ¡Crea una nueva!</p>
    @endforelse
@endsection