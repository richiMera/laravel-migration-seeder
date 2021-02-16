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
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif
    <form action="{{route('articles.update', $article->id)}}" method="post">

        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title"  value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="subtitle">subtitle</label>
            <input type="text" class="form-control" name="subtitle" id="subtitle"  value="{{$article->subtitle}}">
        </div>
        <div class="form-group">
            <label for="author">author</label>
            <input type="text" class="form-control" name="author" id="author"  value="{{$article->author}}">
        </div>
        <div class="form-group">
            <label for="content">Nuovo articolo</label>
            <textarea class="form-control" name="content" id="content" rows="6">{{$article->content}}</textarea>
        </div>

        <input class="btn btn-dark" type="submit" value="Modifica">

        
    </form>
    </div>
</body>
</html>