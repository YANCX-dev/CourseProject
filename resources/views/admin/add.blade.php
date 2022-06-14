@extends('layouts.admin')


@section('content')
    <div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card el-color">
                <div class="card-header fs-5 fc-white fc-white">Добавление точки назначения</div>
                <div class="card-body">
                    <form action="{{ route('addDest') }}" method="POST">
                        @csrf
                        <div class="">
                            <span class="fc-black fs-5">Название новой точки назначения:</span>
                            <div>
                                <input type="text" name="destination" class="bg-light rounded border w-100" required>
                            </div>
                            @error('destinationAdd')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 rounded btn-dark w-100">Добавить</button>
                    </form>
                </div>
            </div>
            <div class="col mt-4">
                <div class="card el-color">
                    <div class="card-header fs-5 fc-white">Добавление маршрута</div>
                    <div class="card-body">
                        <form action="{{ route('addRoute') }}" method="POST">
                            @csrf
                            <div>
                                <span class="fc-black fs-5">Точка отправления:</span>
                                <div>
                                    <input type="text" name="departurePoint" value="Челябинск" class="bg-light rounded w-100 p-1 border" disabled>
                                </div>
                            </div>
                            <div class="pt-2">
                                <span class="fc-black fs-5">Точка назначения:</span>
                                <div>
                                    <select name="destination_id" id="destination_id" class="form-select">
                                        @foreach($destinations as $dest)
                                            <option value="{{$dest->id}}">{{$dest->destination}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="pt-2">
                                <span class="fc-black fs-5">Время в пути:</span>
                                <div>
                                    <input type="time" name="travelTime" id="travelTime" class="form-select" required>
                                </div>
                            </div>
                            @error('routeAdd')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                            <button type="submit" class="mt-2 btn rounded btn-dark w-100">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card el-color">
                <div class="card-header fs-5 fc-white">Создание рейса</div>
                <div class="card-body">
                    <form action="{{ route('addCruise') }}" method="POST">
                        @csrf
                        <div>
                            <span class="fc-black fs-5">Выберите маршрут:</span>
                            <div>
                                <select name="route_id" id="route_id" class="form-select">
                                    @foreach($routes as $route)
                                        <option value="{{$route->id}}">{{$route->destination->destination}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="fc-black fs-5">Автобус:</span>
                            <div>
                                <select name="bus_id" id="bus_id" class="form-select">
                                    @foreach($buses as $bus)
                                        <option value="{{$bus->id}}">{{$bus->busRegNum}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <span class="fc-black fs-5">Цена билета:</span>
                            <div>
                                <input type="number" name="ticketPrice"  class="bg-light rounded w-100 p-1 border" required>
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="fc-black fs-5">Дата отправления:</span>
                            <div>
                                <input type="date" name="departureDate" id="departureDate" class="form-select" value="{{date(now()->format('Y-m-d'))}}" >
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="fc-black fs-5">Время отправления:</span>
                            <div>
                                <input type="time" name="departureTime" id="departureTime" class="form-select" required>
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="fc-black fs-5">Дата прибытия:</span>
                            <div>
                                <input type="date" name="arrivalDate" id="arrivalDate" class="form-select" value="{{date(now()->format('Y-m-d'))}}">
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="fc-black fs-5">Время прибытия:</span>
                            <div>
                                <input type="time" name="arrivalTime" id="arrivalTime" class="form-select" value="{{date(now()->format('Y-m-d'))}}">
                            </div>
                        </div>
                        @error('cruiseAdd')
                        <p class="error-bg"><small class="error">{{$message}}</small></p>
                        @enderror
                        <button type="submit" class="btn mt-2 rounded btn-dark w-100">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white el-color">
                <div class="card-header fs-5 fc-white fc-white">Добавление марки автобуса</div>
                <div class="card-body">
                    <form action="{{ route('addMark') }}" method="POST">
                        @csrf
                        <span class="fc-black fs-5">Введите название марки:</span>
                        <div>
                            <input type="text" name="mark" id="mark" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        @error('addMark')
                        <p class="error-bg"><small class="error">{{$message}}</small></p>
                        @enderror
                        <button type="submit" class="btn btn-dark w-100 mt-2">Добавить</button>
                    </form>
                </div>
            </div>
            <div class="card text-white el-color mt-4">
                <div class="card-header fs-5 fc-white">Добавление водителя</div>
                <div class="card-body">
                    <form action="{{ route('addDriver') }}" method="POST">
                        @csrf
                        <span class="fc-black fs-5">Введите имя:</span>
                        <div>
                            <input type="text" name="name" id="name" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Введите фамилию:</span>
                        <div>
                            <input type="text" name="surname" id="surname" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Введите возраст:</span>
                        <div>
                            <input type="number" name="age" id="age" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Введите стаж:</span>
                        <div>
                            <input type="number" name="exp" id="exp" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Введите № водительского удовстоверения:</span>
                        <div>
                            <input type="text" name="driverLicense" id="driverLicense" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        @error('addDriver')
                        <p class="error-bg"><small class="error">{{$message}}</small></p>
                        @enderror
                        <button type="submit" class="btn btn-dark w-100 mt-2">Добавить</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white el-color">
                <div class="card-header fs-5 fc-white">Добавление автобуса</div>
                <div class="card-body">
                    <form action="{{ route('addBus') }}" method="POST">
                        @csrf
                        <span class="fc-black fs-5">Введите номер автобуса:</span>
                        <div>
                            <input type="text" name="busRegNum" id="busRegNum" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Введите количество мест:</span>
                        <div>
                            <input type="number" name="countOfPlaces" id="countOfPlaces" class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Выберите водителя:</span>
                        <select name="driver_id" id="driver_id" class="form-select mt-2">
                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->surname }} {{$driver->name}}</option>
                            @endforeach
                        </select>
                        <span class="fc-black fs-5">Выберите марку автобуса:</span>
                        <select name="mark_id" id="mark_id" class="form-select mt-2">
                            @foreach($marks as $mark)
                                <option value="{{ $mark->id }}">{{$mark->mark}}</option>
                            @endforeach
                        </select>
                        @error('addDriver')
                        <p class="error-bg"><small class="error">{{$message}}</small></p>
                        @enderror
                        <button type="submit" class="btn btn-dark w-100 mt-2">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
