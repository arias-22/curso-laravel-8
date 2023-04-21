<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1"></div>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4"> 
            @yield('content')
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>