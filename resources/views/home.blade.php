<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        
        <h1 class="py-2">Bienvenido a la pagina principal</h1>
        
        <x-alert type="danger" class="mb-4">
            <x-slot name="title">
                Alerta!
            </x-slot>

            Contenido de la alerta {{-- Se le asigna el contenido a mostar a la variable / lo que se muestra en la alerta de la pagina --}}
        </x-alert>

        <p>hola mundo</p>

    </div>
</body>
</html>