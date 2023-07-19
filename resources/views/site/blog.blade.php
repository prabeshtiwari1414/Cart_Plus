<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('site.template')
    @php
    $activePage="user.blog";
    @endphp
    @section('middlesection')
    <p>Blog Page</p>
    @stop
</body>

</html>