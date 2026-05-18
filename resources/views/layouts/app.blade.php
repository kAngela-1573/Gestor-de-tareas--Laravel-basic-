<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        .container { max-width: 800px; margin: auto; }
        .task-card { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: red; font-size: 0.9em; margin-top: 5px; }
        .success { background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        .btn-edit { background: #ffc107; color: #000; }
        .btn-delete { background: #dc3545; }
        form.delete-form { display: inline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Gestor de Tareas Personal</h1>
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>