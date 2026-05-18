@extends('layouts.app')

@section('content')
    <h2>Crear Nueva Tarea</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Título <span style="color: red;">*</span></label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descripción <span style="color: red;">*</span></label>
            <textarea name="description" id="description" rows="4">{{ old('description') }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="due_date">Fecha Límite <span style="color: red;">*</span></label>
            <input type="date" name="due_date" id="due_date" value="{{ old('due_date') }}">
            @error('due_date')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">✅ Guardar Tarea</button>
        <a href="{{ route('tasks.index') }}" style="margin-left: 10px;">Cancelar</a>
    </form>
@endsection