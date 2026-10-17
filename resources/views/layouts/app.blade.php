<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'POS Application' }} | IT0049 TFA5</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="{{ url('/') }}">POS System</a>
            <nav aria-label="Main navigation">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('/customers') }}" class="{{ request()->is('customers') ? 'active' : '' }}">Customers</a>
                <a href="{{ url('/users') }}" class="{{ request()->is('users') ? 'active' : '' }}">Users</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} POS Application &mdash; IT0049 Web System Technologies (TFA5)</p>
        </div>
    </footer>
</body>
</html>
