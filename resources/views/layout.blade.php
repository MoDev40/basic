<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <div><h1>Student MGN</h1></div>
        <div>
        <ul>
            <li><a href="/">Home</a></li>
            @auth
            <li><a href="/students">Students</a></li>
            <li><a href="/logout">Logout</a></li>
            @else
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </div>
    </nav>
    @yield('content')
</body>
</html>