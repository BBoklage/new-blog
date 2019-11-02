<html>
    <head>

    </head>
    <body>
        <ul>
                @include ('nav')
            @foreach ($posts as $post)
                <li>
                    <h3>{{$post->title}}</h3>
                    <p>
                        {{ substr($post->content, 0, 56)}}

                    </p>
                    <a href="{{route('post.show', $post->id)}}">Read Me</a>
                </li>
                @endforeach
        </ul>
        
    </body>
</html>