<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <script src="https://kit.fontawesome.com/f0e17752b2.js" crossorigin="anonymous"></script>
    <title>Task Manager - @yield('title')</title>
</head>

<body>
    <header>
        <nav>
            <i class="fa-solid fa-book"></i>
            <h1>Task Manager</h1>
            <ul class="menu-list">
                <li><a href="/">Home</a></li>
                <li><a href="/tasks">Tasks</a></li>
            </ul>
        </nav>
        <!-- create href for login and register -->
        <div class="auth">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </header>
    <main></main>
    <footer></footer>

</body>

</html>
