<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/">HOME</a>
<a href="/tasks">TASKS</a>
<a href="/about">ABOUT</a>
    <h1> {{ $task->id }}</h1>
    <h2> {{ $task-> body }}</h2>
    <h3> {{ $task->created_at }}</h3>
    <h3> {{ $task->updated_at }}</h3>
</body>
</html>