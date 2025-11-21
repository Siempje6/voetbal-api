<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voetbalbeheer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('voetballers.index') }}">Voetballers</a>
        <a class="btn btn-success" href="{{ route('voetballers.create') }}">+ Nieuwe Speler</a>
        <a class="btn btn-success" href="{{ route('clubs.index') }}">Clubs</a>

        
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
