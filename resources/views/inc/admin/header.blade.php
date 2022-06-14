<header class="d-flex justify-content-between flex-wrap flex-lg-row flex-md-column navbar-dark sticky-top bg-dark p-3 shadow">
    <a href="{{ route('admin') }}" class="fc-white fs-5 link-info text-decoration-none">Билеты и расписание</a>
    <a href="{{route('user.info')}}" class="fc-white fs-5 link-info text-decoration-none">Информация о пассажирах</a>
    <a href="{{ route('AddPage') }}" class="fc-white fs-5 link-info text-decoration-none">Добавление записей</a>
    <a href="{{ route('deletePage') }}" class="fc-white fs-5 link-info text-decoration-none">Удаление записей</a>
    <a href="{{ route('createInfo') }}" class="fc-white fs-5 link-info text-decoration-none">Новости и информация для пассажиров</a>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="text-decoration-none fs-5 fc-white link-primary" href="{{ route('logout') }}">Выход</a>
        </div>
    </div>
</header>
