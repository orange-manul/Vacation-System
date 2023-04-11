<!DOCTYPE html>
<html>
<head>
    <title>Система отпусков</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<body>

<div class="container">
    <h1>Система отпусков</h1>
    <div>
        @auth
        <p id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            @if(Auth::user()->first_name && Auth::user()->middle_name && Auth::user()->last_name)
                {{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}
            @endif
        </p>
        @endauth
    </div>
    <br>
    <!-- Authentication Links -->

    <p><a class="button" href="{{ route('employees.index') }}">Все отпуски сотрудников</a></p>

    @guest
        @if (Route::has('login'))
            <div>
                <a class="button" href="{{ route('login') }}">Вход</a>
            </div>
            <br>
        @endif
        @if (Route::has('register'))
            <div>
                <a class="button" href="{{ route('register') }} ">Регистрация</a>
            </div>
            <br>
        @endif
    @else

    @endguest

    <div>
        @auth
            <p><a class="button" href="{{ route('user.index') }}">Посмотреть свои даты для отпуска</a></p>
        @endauth
    </div>

    <div>
        @if(auth()->check() && auth()->user()->role === \App\Models\User::ROLE_MANAGER)
            <p>
                <a class="button-gray" href="{{ route('managers.index') }}">Вход для руководителя</a>
            </p>
        @endif
    </div>

    <div>
        <a class="button-red" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            Выход
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<div>
    <p class="bottom-center">Сайт предназначен для выбора даты отпуска у сотрудников, автоматизация рутинного
        процесса.</p>
</div>
</body>
</html>
