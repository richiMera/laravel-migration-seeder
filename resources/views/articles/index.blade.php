<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>SUBTITLE</th>
                    <th>AUTHOR</th>
                    <th>PUBBLICATION_DATE</th>
                </tr>
           </thead>
            <tbody>
                 @foreach ($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->subtitle}}</td>
                    <td>{{$article->author}}</td>
                    <td>{{$article->created_at}}</td>
                    <td><a href="{{route('articles.show', $article->slug)}}" class="btn btn-secondary">Mostra</a></td>
                    {{-- <td><a href="{{route('beers.edit', $article->id)}}" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="{{route('beers.destroy', $article->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td> --}}
               </tr>
                @endforeach
            </tbody>
        </table>  
        <a class="btn btn-primary" href="{{route('articles.create')}}">Crea un nuovo Post</a>
    </div>
</body>
</html>