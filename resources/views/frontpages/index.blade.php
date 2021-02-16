<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-sm-6">
                    <div class="card my-3">
                        <div class="card-body">
                          <h2 class="card-title">{{$article->title}}</h2>
                          <span>by {{$article->author}}</span>
                          <h5 class="card-title">{{$article->subtitle}}</h5>
                          <p class="card-text">{{$article->content}}</p>
                          <small class="text-right">{{$article->created_at}}</small>
                          <a href="{{route('frontpages.show', $article->slug)}}" class="btn btn-primary">Read more</a>
                        </div>
                      </div> 
                </div>
                @endforeach
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>