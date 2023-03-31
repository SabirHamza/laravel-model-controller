<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                  {{$movie->title}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$movie->original_title}}</li>
                  <li class="list-group-item">{{$movie->nationality}}</li>
                  <li class="list-group-item">{{$movie->date}}</li>
                </ul>
              </div>
            @endforeach
        </div>
    </div>
</body>
</html>