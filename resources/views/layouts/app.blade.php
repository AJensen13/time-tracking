<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Time Tracker</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="#">Test</a>
                </li>
                <li>
                    <a href="#">Tester</a>
                </li>
                <li>
                    <a href="#">Testered</a>
                </li>
            </ul>
        </nav>
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </body>
</html>
