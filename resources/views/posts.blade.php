<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach($posts as $post)

        <div style="padding: 20px; margin-top: 50px;">
            <p>
                <a href="/posts/{{$post->id}}">
                    Title: {{ $post->Title }}
                </a>
            </p>
            <p>Description: {{ $post->description }}</p>
            <p>URL: 
                <a href="/posts/{{$post->id}}">
                    {{ $post->URL }}
                </a>
        </div>
        

    @endforeach

</body>
</html>