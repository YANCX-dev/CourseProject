@extends('layouts.admin')


@section('content')

    <div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-4 g-4 p-5">
        <div class="col">

            <div class="col card el-color mt-4">
                <div class="card-header fc-white fs-5">Удаление маршрута</div>
                <div class="card-body">
                    <form action="{{ route('deleteRoute') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Выберите точку назначения:</span>
                            <div>
                                <select name="route" id="route" class="form-select">
                                    @foreach($routes as $route)
                                        <option value="{{ $route->id }}"> {{ $route->departurePoint }} - {{$route->destination->destination}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('deleteRoute')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Удалить</button>
                    </form>
                </div>
            </div>
            <div class="card el-color mt-4">
                <div class="card-header fc-white fs-5">Удаление рейса</div>
                <div class="card-body">
                    <form action="{{ route('deleteCruise') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Выберите рейс:</span>
                            <div>
                                <select name="cruise" id="cruiseRemove" class="form-select">
                                    @foreach($cruises as $cruise)
                                        <option value="{{ $cruise->id }}"> {{ $cruise->route->destination->destination }} {{$cruise->departureTime}} {{$cruise->bus->busRegNum}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('deleteCruise')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Удалить</button>
                    </form>
                </div>
            </div>

        </div>
{{--        Второй столбец--}}
        <div class="col">
            <div class="card el-color">
                <div class="card-header fc-white fs-5">Удаление водителя</div>
                <div class="card-body">
                    <form action="{{ route('deleteDriver') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Выберите водителя:</span>
                            <div>
                                <select name="driver" id="removeDriver" class="form-select">
                                    @foreach($drivers as $driver)
                                        <option value="{{ $driver->id }}"> {{ $driver->name }} {{ $driver->surname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('deleteDest')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Удалить</button>
                    </form>
                </div>
            </div>
            <div class="card el-color mt-4">
                <div class="card-header fc-white fs-5">Удаление автобуса</div>
                <div class="card-body">
                    <form action="{{ route('deleteBus') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Выберите автобус:</span>
                            <div>
                                <select name="bus" id="deleteBus" class="form-select">
                                    @foreach($buses as $bus)
                                        <option value="{{ $bus->id }}"> {{ $bus->busRegNum}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('deleteBus')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
{{--        Третий столбец--}}
        <div class="col">
            <div class="card el-color">
                <div class="card-header fc-white fs-5 rounded">Удаление марки авто</div>
                <div class="card-body">
                    <form action="{{ route('deleteMark') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Выберите Марку:</span>
                            <div>
                                <select name="mark" id="mark" class="form-select">
                                    @foreach($marks as $mark)
                                        <option value="{{ $mark->id }}"> {{ $mark->mark }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('deleteMark')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Удалить</button>
                    </form>
                </div>
            </div>
            <div class="card el-color mt-4">
                <div class="card-header fc-white fs-5 rounded">Удаление страницы:</div>
                <div class="card-body">
                    <form action="{{ route('deleteInfoPage') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Выберите страницу:</span>
                            <div>
                                <select name="page" id="pageInfo" class="form-select">
                                    @foreach($pages as $page)
                                        <option value="{{ $page->id }}"> {{ $page->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('deletePageInfo')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Удалить</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
