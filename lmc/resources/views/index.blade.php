<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Lavarel Model Controller')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <header>
        <div class="mx-auto" style="width: 600px;">
            <h1>Page Laverel Model Controller</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                @foreach($movies as $movie)
                <div class="col-sm-4">
                    <div class="card m-3" style="width: 20rem;">
                        <img style="height: 400px;" src="{{$movie->poster}}" class="card-img-top" alt="{{$movie->title}}">
                        <div class="card-body">
                            <h4 class="card-title">Title:{{$movie->title}}</h4>
                            <h6 class="card-subtitle">Original Title: {{$movie->original_title}}</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nazionality: {{$movie->nationality}}</li>
                                <li class="list-group-item">Released on: {{$movie->date}}</li>
                                <li class="list-group-item">Vote: {{$movie->vote}} / 10</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </main>
</body>

</html>