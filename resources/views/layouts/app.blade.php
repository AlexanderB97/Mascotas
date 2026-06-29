<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Mascotas')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h1>Sistema de Mascotas</h1>
       <nav>
    <a href="{{ route('pets.index') }}"><i class="fa-solid fa-paw"></i> Mascotas</a>
    <a href="{{ route('pets.create') }}"><i class="fa-solid fa-plus"></i> Nueva Mascota</a>
</nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        Programación III - Laravel 13
    </footer>
</body>
</html>