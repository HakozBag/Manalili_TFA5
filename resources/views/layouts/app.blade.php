<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Manalili POS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container navigation">
            <a class="brand" href="{{ route('home') }}">
                Manalili <span>POS</span>
            </a>

            <nav aria-label="Main navigation">
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>

                <a href="{{ route('customers.index') }}"
                   class="{{ request()->routeIs('customers.index') ? 'active' : '' }}">
                    Customers
                </a>

                <a href="{{ route('users.index') }}"
                   class="{{ request()->routeIs('users.index') ? 'active' : '' }}">
                    Users
                </a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="container">
        &copy; {{ date('Y') }} Manalili POS | Web System Technologies
    </footer>
</body>
</html>