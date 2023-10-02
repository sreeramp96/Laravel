<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a blade template. This is year {{2023}}</h1>
    <h3>{{$name}}</h3>
    <h4>{{$catname}}</h4>

    <ul>
        @foreach ($allAnimals as $animal)
            <li>{{$animal}}</li>
        @endforeach
    </ul>

    <h1>About Page<h1><a href="/">back to home</a>
</body>
</html>