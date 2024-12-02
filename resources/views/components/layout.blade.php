<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div>
        <nav>
            <ul>
                <li>
                    <a href="/">
                        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
