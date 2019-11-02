<html>
    <head>
        <title>Show Posts</title>
    </head>
    <body>
        @include ('nav')
        <h1>{{$post->title}}</h1>
        <p>
            {{$post->content}}

        </p>
        <a href="{{route('post.edit', $post->id)}}">Edit Post</a>
        <form action="{{route('post.destroy', $post->id)}}" method="post">
            @csrf
            <input type="submit" name="delete" value="delete post">
        </form>
    </body>
</html>