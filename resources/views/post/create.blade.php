<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include ('nav')
    <h1>Hello</h1>
    <form method="POST" action="{{route('post.store')}}">
        @csrf
        <label for="title">Title
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Enter the post title">
        </label>
        <label for="content">Title
            <textarea type="text" class="form-control" name="content" placeholder="Enter the post content">{{old('content')}}</textarea>
        </label>
        <input type="submit">
    </form>
    
</body>
</html>