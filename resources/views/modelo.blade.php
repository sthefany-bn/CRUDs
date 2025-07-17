<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PET</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <h1><a href="/" class="nav-link">🐾 CRUD de Pet's</a></h1>
        </div>
    </header>
    <main class="principal">
        @if(session('success'))
            <div class="alert success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('danger'))
            <div class="alert danger">
                {{ session('danger') }}
            </div>
        @endif

        @yield('conteudo')
    </main>

</body>
</html>