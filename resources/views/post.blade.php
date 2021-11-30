<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div style="padding: 20px; margin-top: 50px;">
        <p>Title: {{ $post->title }}</p>
        <p>Meta Description: {{ $post->meta_description }}</p>
        <p>Body: {{ $post->body }}</p>
        <small>{{ $post->view }}</small>
    </div>

</body>
</html>