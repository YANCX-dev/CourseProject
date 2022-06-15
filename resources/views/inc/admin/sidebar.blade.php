<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 admin-el-color">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="d-none d-sm-inline" style="font-size: 30px;color: #333333">Меню</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none side-bar-el d-sm-inline">Главная</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="text-decoration-none px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none fs-2 d-sm-inline">Панель управления </span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('admin') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Билеты и расписание</span></a>
                            </li>
                            <li>
                                <a href="{{route('user.info')}}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Информация о пассажирах</span> </a>
                            </li>
                            <li>
                                <a href="{{ route('createInfo') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Новости и информация для пассажиров</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="text-decoration-none px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none fs-2 d-sm-inline fs-3">Удаление/Добавление записей</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu2" data-bs-parent="#menu2">
                            <li class="w-100">
                                <a href="{{ route('destination.control') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Точки назначения</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('bus.control') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Автобусы</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('route.control') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Управление маршрутами</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('cruise.control') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Управление рейсами</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('driver.control') }}" class="nav-link side-bar-el px-0"> <span class="d-none d-sm-inline">Управление водителями</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle"></a>
{{--                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>--}}
                    </li>
{{--                    <li>--}}
{{--                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">--}}
{{--                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>--}}
{{--                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">--}}
{{--                            <li class="w-100">--}}
{{--                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="nav-link px-0 align-middle">--}}
{{--                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>--}}
{{--                    </li>--}}
                </ul>
                <hr>
                <div class="dropdown pb-4">
{{--                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">--}}
{{--                        <span class="d-none d-sm-inline mx-1">loser</span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">--}}
{{--                        <li><a class="dropdown-item" href="#">New project...</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Settings</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Profile</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="#">Sign out</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>
