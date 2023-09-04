<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <!-- add search bar -->
        <div class="search">
            <form action="{{route('task.index')}}" method="POSt">
                @method('get')
                <input type="text" name="search" placeholder="Search" class="search-input">
                <button type="submit" class="button-search"><i class="fa-solid fa-search"></i></button>
            </form>
        </div>
        <!-- create href for login and register -->
        <div class="auth">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </header>
    <div class="row" style="max-width: 100%;">
        <!-- Sidebar -->
        <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem; ">
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="{{route('task.index')}}" class="nav-link  py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                        <!-- add icon home fontawesome -->
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('task.draft')}}" class="nav-link  py-3 border-bottom" aria-current="page" title="Draft" data-bs-toggle="tooltip" data-bs-placement="right">
                        <!-- add icon home fontawesome -->
                        <i class="fa-solid fa-file"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('task.published')}}" class="nav-link  py-3 border-bottom" aria-current="page" title="Published" data-bs-toggle="tooltip" data-bs-placement="right">
                        <!-- add icon home fontawesome -->
                        <i class="fa-solid fa-upload"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('task.verified')}}" class="nav-link  py-3 border-bottom" aria-current="page" title="Validate" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-marker"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('task.done')}}" class="nav-link  py-3 border-bottom" aria-current="page" title="Validate" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-square-check"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('task.create')}}" class="nav-link py-3 border-bottom" aria-current="page" title="Add Task" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-regular fa-square-plus"></i>
                    </a>
                </li>

            </ul>
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <main>
            @yield('content')
            @section('pagination')
            @show
        </main>
    </div>

    <footer>
        <!-- create footer with full information like contact, etc -->
        <p>Task Manager &copy; 2021</p>

    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
