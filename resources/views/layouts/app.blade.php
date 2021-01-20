<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class='bg-gray-200'>
    <nav class='p-6 bg-white flex justify-between mb-6'>
        <ul class='flex items-center'>
            <li class='p-3'>
                <a href="">André Ponce</a>
            </li>
            <li class='p-3'>
                <a href="">Login</a>
            </li>
            <li class='p-3'>
                <a href="">Register</a>
            </li>
            <li class='p-3'>
                <a href="">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>