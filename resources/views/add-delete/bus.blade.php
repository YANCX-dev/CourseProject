@extends('layouts.admin')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="d-flex justify-content-center align-items-center justify-content-between card text-white admin-el-color">
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
            </div>
            <div class="col-lg-8">
                <div class="card-header admin-el-color fs-5 fc-white ">Добавление автобуса</div>
                <div class="admin-el-color card-body rounded">
                    <form action="{{ route('addBus') }}" method="POST">
                        @csrf
                        <span class="fc-black fs-5">Введите номер автобуса:</span>
                        <div>
                            <input type="text" name="busRegNum" id="busRegNum"
                                   class="form-text w-100 rounded p-1 border" required>
                        </div>
                        <span class="fc-black fs-5">Введите количество мест:</span>
                        <div>
                            <input type="number" name="countOfPlaces" id="countOfPlaces"
                                   class="form-text w-100 rounded p-1 border" required>
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
        <div class="row mt-4">
            <div class="col-lg-12">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>#Автобуса</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Регистрационный номер</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Кол-во мест</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Водитель</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Марка</span>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="tableCruise" class="table-responsive">
                    @foreach($buses as $bus)
                        <tr>
                            <th class="text-center" scope="col">{{$bus->id}}</th>
                            <td class="text-center">{{$bus->busRegNum}}</td>
                            <td class="text-center">{{$bus->countOfPlaces}}</td>
                            <td class="text-center">{{$bus->driver->name}}</td>
                            <td class="text-center">{{$bus->mark->mark}}</td>
                            <td class="text-center">
                                <a href="{{route('deleteBus',$bus->id)}}" class="btn btn-dark">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
