<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ $data['pageTitle']}}</title>
</head>
<body>
    <h3>{{ $data['text'] }}</h3>

    {{-- <h5>{{ $Movies }}</h5> --}}

    {{-- @foreach ($vote as $voto)
        <h6>{{ $voto->title }}</h6>
    @endforeach --}}

    <div class="container">
        @foreach ($Movies as $movie)
            <div class="card_film">
                <h3>{{$movie['title']}}</h3>
                <h5>{{$movie['original_title']}}</h5>
                <p>Data di uscita: {{$movie['date']}}</p>
                <p>Voto: {{$movie->vote}}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
