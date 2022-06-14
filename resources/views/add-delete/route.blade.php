@extends('layouts.admin')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card admin-el-color">
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
                            <p class="fw-bold"><small>{{$message}}</small></p>
                            @enderror
                            <button type="submit" class="mt-2 btn rounded btn-dark w-100">Добавить</button>
                        </form>
                    </div>
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
                                <span>#Маршрута</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Точка отправления</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Пункт назначения</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Время в пути</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Инструменты</span>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="tableCruise" class="table-responsive">
                    @foreach($routes as $route)
                        <tr>
                            <th scope="col">{{$route->id}}</th>
                            <td>{{$route->departurePoint}}</td>
                            <td>{{$route->destination->destination}}</td>
                            <td>{{$route->travelTime}}</td>
                            <td>
                                <a href="{{route('deleteRoute',$route->id)}}" class="btn btn-dark">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
