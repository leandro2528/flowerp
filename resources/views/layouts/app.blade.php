<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow ERP</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #3370cc;
            color: white;
            padding-top: 2rem;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 0.25rem;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        main {
            padding: 2rem;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar flex-shrink-0">
        <h3 class="text-center p-4">Flow ERP</h3>
        <a href="{{ route('clientes.index') }}">Clientes</a>
        <a href="">Financeiro</a>
        <a href="">Estoque</a>
    </div>

    <!-- Conteúdo -->
    <main class="flex-grow-1">
        @yield('content')
    </main>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
