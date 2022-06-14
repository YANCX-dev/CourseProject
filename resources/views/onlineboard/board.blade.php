@extends('layouts.app')


@section('content')
    @include('inc.ticketbar')
    @if(count($cruises) > 0)
        <div class="container table-responsive">
            <a class="btn btn-dark mt-5 px-5" href="{{ route('home') }}">Назад</a>
            <table class="table mt-5">
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
                            <button class="btn-dark" id="sortByArrTime">Sort &uarr;</button>
                        </div>

                    </th>
                    <th scope="col">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Точка прибытия</span>
                            <button class="btn-dark" id="sortByDest">Sort &uarr;</button>
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
                            <button class="btn-dark" id="sortByDepTime">Sort &uarr;</button>
                        </div>

                    </th>
                    <th scope="col">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Стоимость билета</span>
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
                        <td>{{$cruise->route->destination->destination}}</td>
                        <td>{{date('d.m.Y', strtotime($cruise->arrivalDate)) }}</td>
                        <td>{{date('H:m', strtotime($cruise->arrivalTime))}}</td>
                        <td>{{$cruise->ticketPrice}}</td>
                        <td>
                            <a href="{{ route('orderForm', $cruise)}}" class="btn btn-dark">Забронировать</a>
                        </td>
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
{{--            <a class="back_to_top" title="Наверх">↑ААААААААААААААААААААА</a>--}}
        </div>

@endsection


@push('child-script')
    <script src="{{ asset('js/Sort.js') }}"></script>
@endpush
