<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    @vite('resources/js/ts/typescript-index.tsx')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
</head>
<body>
    <section id="app">
        <header class="navigation">
            <div class="navigation__logo-container">
                <a class="navigation__logo-link" href="/job-board">
                    <img class="navigation__logo" src="{{ Vite::asset('resources/images/house.svg') }}" alt="Logo">
                </a>
            </div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    @auth
                        <li class="navigation__item">
                            <a class="navigation__link" href="/jobs/create">Post a Job</a>
                        </li>
                        <li class="navigation__item">
                            {{--                            <a class="navigation__link" href="/logout" method="Delete">Logout</a>--}}
                        </li>
                    @endauth

                    @guest
                        <li class="navigation__item">
                            <a class="navigation__link" href="/register">Sign Up</a>
                        </li>
                        <li class="navigation__item">
                            <a class="navigation__link" href="/login">Login</a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </header>

        <main>
            {{ $slot }}
        </main>
    </section>
</body>
</html>
