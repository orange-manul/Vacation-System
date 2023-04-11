<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <nav class="mt-5">
            <a class="ml-3" href="{{ route('main') }}">
                <i class="fas fa-home fa-lg mb-3"></i>
                <p class="ml-3">Главное меню</p>
            </a>
            <a class="ml-3" href="{{ route('managers.index') }}">
                <i class="fas fa-suitcase fa-lg"></i>
                <p class="ml-3">Отпуски сотрудников</p>
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
