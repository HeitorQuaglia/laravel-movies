<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title>Laravel Movies</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#">

                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>
