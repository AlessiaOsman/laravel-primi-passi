<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>{{$title}}</h1>
    <ul>
        @foreach ($links as $link)
        <li>
            <a href='{{route($link['route'])}}'>{{$link['text']}}</a>
        </li>
        @endforeach
    </ul>
    </header>
  

</body>
</html>
