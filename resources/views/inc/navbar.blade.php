<nav class="navbar navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand fs-1 mb-1" href="{{ route('home') }}"><img src="{{asset('storage/Logo.png')}}" style="width: 100px; height: auto;"  alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link link-dark fs-5 fw-bold" href="{{ route('onlineCruises') }}">Онлайн-табло</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link link-dark fs-5 fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Пассажирам
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-5 fw-bold" href="{{ route('showInfoPage', 1) }}">Способы покупки билетов</a></li>
                            <li><a class="dropdown-item fs-5 fw-bold" href="{{ route('showInfoPage', 2) }}">Правила возврата билетов</a></li>
                            <li><a class="dropdown-item fs-5 fw-bold" href="{{ route('showInfoPage', 3) }}">Правила пользования услугами автовокзала</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
