@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-grid row justify-content-center align-items-center admin-el-color rounded">
                <div class="mt-2 p-2">
                    <h3 class="text-center mt-1 fc-black">Инофрмация о пассажире:</h3>
                    <p class="p-1 fs-20px rounded bg-light fc-black">Имя: {{$user->name}}</p>
                    <p class="p-1 fs-20px rounded bg-light fc-black">Фамилия: {{ $user->surname }}</p>
                    <p class="p-1 fs-20px rounded bg-light fc-black">Номер телефона: {{ $user->phone_number }}</p>
                    <p class="p-1 fs-20px rounded bg-light fc-black">Адрес электронной почты:{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table mt-5 text-center">
                <thead>
                <tr>
                    <th scope="col">
                        <div class="d-flex justify-content-between align-items-center p-1">
                            <span>Точка отправления</span>
                        </div>
                    </th>
                    <th scope="col">
                        <div class="d-flex justify-content-between align-items-center p-1">
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
                            <span>Номер автобуса</span>
                        </div>
                    </th>
                    <th scope="col">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Место</span>
                        </div>
                    </th>

                </tr>
                </thead>
                <tbody id="tableCruise">
                @foreach($userTickets as $ticket)
                    <tr>
                        <th scope="col">{{ $ticket->cruises->route->destination->destination }}</th>
                        <td>{{ date('d.m.Y', strtotime($ticket->cruises->departureDate)) }}</td>
                        <td>{{ date('H:m', strtotime($ticket->cruises->departureTime)) }}</td>
                        <td>{{ date('d.m.Y', strtotime($ticket->cruises->arrivalDate)) }}</td>
                        <td>{{ date('H:m', strtotime($ticket->cruises->arrivalTime)) }}</td>
                        <td>{{ $ticket->cruises->bus->busRegNum }}</td>
                        <td>{{ $ticket->place }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
