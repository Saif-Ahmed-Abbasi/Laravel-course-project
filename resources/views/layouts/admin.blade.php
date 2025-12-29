<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ assets('css.style') }}">
    <title>Admin Panel</title>
</head>
<body>

<div class="wrapper">

    <aside>
        <h3>Admin</h3>
        <ul>
            <li>Dashboard</li>
            <li>Users</li>
            <li>Courses</li>
            <li>Requests</li>
            <li>Logout</li>
        </ul>
    </aside>

    <main>
        @yield('content')
    </main>

</div>

</body>
</html>
