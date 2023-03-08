<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Primi Passi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <header>
            <nav>
                <ul class="d-flex justify-content-center gap-3">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                    <li><a href="{{ url('/about-us') }}">About us</a></li>
                    <li><a href="{{ url('/contacts') }}" class="fw-bold"s>Contacts</a></li>
                </ul>
            </nav>
        </header>

        <h1 id="message">Hello World!</h1>
        <h2>Contacts</h2>
    </div>

</body>

</html>