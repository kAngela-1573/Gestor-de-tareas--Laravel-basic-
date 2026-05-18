@extends('layouts.app')

@section('content')
    <h2>Editar Tarea</h2>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título <span style="color: red;">*</span></label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descripción <span style="color: red;">*</span></label>
            <textarea name="description" id="description" rows="4">{{ old('description', $task->description) }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="due_date">Fecha Límite <span style="color: red;">*</span></label>
            <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $task->due_date) }}">
            @error('due_date')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">✏️ Actualizar Tarea</button>
        <a href="{{ route('tasks.index') }}" style="margin-left: 10px;">Cancelar</a>
    </form>
@endsection