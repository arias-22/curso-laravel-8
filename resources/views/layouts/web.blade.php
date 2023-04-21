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
        <nav class="bg-blue-900 py-3">
            <a href="{{ route('home') }}">
                <img 
                src="{{ asset('images/isotipo-platzi.png') }}"
                class="h-8 mx-auto"
                >
            </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4"> 
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        @auth
            <a 
                href="{{url('dashboard')}}" 
                class="text-sm text-gray-900 underline">
                Dashboard
            </a>   
            @else
            <a 
                href="{{url('login')}}" 
                class="text-sm text-gray-900 underline">
                Login
            </a>   
            <a 
                href="{{url('register')}}" 
                class="ml-4 text-sm text-gray-900 underline">
                Register
            </a>   
            
        @endif
    </footer>
</body>
</html>