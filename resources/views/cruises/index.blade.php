@extends('layouts.app')


@section('content')
    @include('inc.ticketbar')
    @if(count($cruises) > 0)
    <div class="container-sm table-responsive min-vh-100">
        @if(session('message'))
            <p class="modal modal-dialog">{{session('message')}}</p>
        @endif
        <a class="btn btn-dark mt-5 m-1 px-5" href="{{ URL::previous() }}">Назад</a>
        <table class="table mt-5 text-center">
            <thead>
            <tr>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center" >
                        <span >Точка отправления</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Дата отправления</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Время отправления</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Точка прибытия</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Дата прибытия</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Время прибытия</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Стоимость билета</span>
                    </div>
                </th>
                <th scope="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Количество свободных мест</span>
                    </div>
                </th>

            </tr>
            </thead>
            <tbody id="tableCruise">
            @foreach($cruises as $cruise)
                <tr>
                    <th scope="col">{{$route}}</th>
                    <td>{{date('d.m.Y', strtotime($cruise->departureDate))}}</td>
                    <td>{{date('H:m', strtotime($cruise->departureTime))}}</td>
                    <td>{{$destination->destination}}</td>
                    <td>{{date('d.m.Y', strtotime($cruise->arrivalDate))}}</td>
                    <td>{{date('H:m', strtotime($cruise->arrivalTime))}}</td>
                    <td>{{$cruise->ticketPrice}}</td>
                    <td>{{$cruise->bus->countOfPlaces - count($cruise->ticket) . '/'. $cruise->bus->countOfPlaces   }}</td>
                    <td><a href="{{ route('orderForm', $cruise)}}" class="btn btn-dark">Забронировать</a></td>
                </tr>
            @endforeach
            </tbody>
            @else
                <div class="container vh-80">
                    <a class="btn btn-dark mt-5 m-1 px-5" href="{{ URL::previous() }}">Назад</a>
                    <h1 class="mt-5 fc-black">Рейсы на указанный маршрут не найдены</h1>
                </div>
            @endif
        </table>
    </div>



@endsection

