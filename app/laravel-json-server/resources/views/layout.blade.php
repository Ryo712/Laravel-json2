<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <header>
        <h1>My Application</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 My Application</p>
    </footer>
</body>
</html>
