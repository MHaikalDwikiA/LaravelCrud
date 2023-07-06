<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/App.css">
    <title>{{$title}} | Haikal</title>
</head>
<body>

    {{ $layouts }}

    <x-navbar></x-navbar>

    {{ $slot }}

    <script src ="/js/App.js'"></script>
</body>
</html>
