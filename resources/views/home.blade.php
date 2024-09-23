<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 11</title>
</head>
<body>
    <x-alert type="success" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta
        </x-slot>
        Contenido de la alerta
    </x-alert>
    <p>texto de prueba</p>
    
</body>
</html>