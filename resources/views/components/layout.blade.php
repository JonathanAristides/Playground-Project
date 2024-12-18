<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
</head>
<body>
    <section id="app">
        <header class="navigation">
            <div class="navigation__logo-container">
                <a class="navigation__logo-link" href="/">
                    <img class="navigation__logo" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a class="navigation__link" href="/about">About</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="/contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            {{ $slot }}
        </main>
    </section>
</body>
</html>
