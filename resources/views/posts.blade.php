<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <article>
@foreach($posts as $post)
    <h1>
        <a href="posts/{{$post->slug}}">
            {{$post->title}}
        </a>
    </h1>
        <p>by <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
            <div><p>{{$post->excerpt}}</p></div>
@endforeach
    </article>

</body>
</html>
