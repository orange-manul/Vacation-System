<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <nav class="mt-5">
            <a class="ml-3" href="{{ route('main') }}">
                <i class="fas fa-home fa-lg"></i>
                <p class="ml-3">Главное меню</p>
            </a>
            <a class="ml-3" href="{{ route('user.create') }}">
                <i class="fas fa-plane fa-lg"></i>
                <p class="ml-3">Выбрать отпуски</p>
            </a>
            <a class="ml-3" href="{{ route('employees.index') }}">
                <i class="fas fa-plane fa-lg"></i>
                <p class="ml-3">Все отпуски сотрудников</p>
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('main') }}">
                    <input class="btn btn-dark" type="submit" value="Выход">
                </a>
            </form>

        </nav>
    </div>
</aside>
