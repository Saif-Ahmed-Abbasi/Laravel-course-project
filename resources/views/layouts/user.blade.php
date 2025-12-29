<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ assets('css.style') }}">
    <title>User Dashboard</title>
</head>
<body>

<header>
    <h3>User Panel</h3>
    <a href="#">Logout</a>
</header>

<main>
    @yield('content')
</main>

</body>
</html>
