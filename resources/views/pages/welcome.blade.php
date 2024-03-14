<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js.app.js'])

    <title>Movie DB</title>
</head>
<body>
    <main class="container">
        @foreach ($movies as $movie)
            <div class="card" style="width: calc(100% / 5);">
                <div class="card-body">
                <h5 class="card-title">{{ $movie['title'] }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        @endforeach

    </main>
</body>
</html>