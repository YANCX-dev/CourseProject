@extends('layouts.admin')




@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">#Рейса</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">Дата и время отправления</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">Место отправления</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">Дата и время прибытия</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">Место прибытия</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">Номер автобуса</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-center">Марка автобуса</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Цена билета</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Свободных мест</span>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="tableCruise" class="table-responsive">
                    @foreach($cruises as $cruise)
                        <tr>
                            <th class="text-center" scope="col">{{$cruise->id}}</th>
{{--                            <td class="text-center">{{date('d-m-Y', strtotime($cruise->departureDate))}}</td>--}}
                            <td class="text-center">{{date('d-m-Y',strtotime($cruise->departureDate)) . ' ' . $cruise->departureTime}}</td>
                            <td class="text-center">Челябинск</td>
                            <td class="text-center">{{date('d-m-Y', strtotime($cruise->arrivalDate))}}</td>
                            <td class="text-center">{{$cruise->dest->destination}}</td>
                            <td class="text-center">{{$cruise->bus->busRegNum}}</td>
                            <td class="text-center">{{$cruise->bus->mark->mark}}</td>
                            <td class="text-center">{{$cruise->ticketPrice}}</td>
                            <td class="text-center">{{$cruise->bus->countOfPlaces - count($cruise->ticket) . '/'. $cruise->bus->countOfPlaces}}</td>
                            <td class="text-center">
                                <a class="btn btn-dark">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card admin-el-color">
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
        </div>
    </div>

@endsection
