<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-4">Home</a>
            </li>

            <li>
                <a href="/dashboard" class="p-4">Dashboard</a>
            </li>

            <li>
                <a href="/posts" class="p-4">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth()
            <li>
                <a href="" class="p-4">{{auth()->user()->name}}</a>
            </li>
            <li>
                <form action="/logout" method="post" class=" p-3 inline">
                    @csrf
                    <button type="submit"> Logout</button>
                </form>
            </li>
            @endauth

            @guest()
            <li>
                <a href="/login" class="p-4">Login</a>
            </li>

            <li>
                <a href="/register" class="p-4">Sign Up</a>
            </li>    
       
            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>