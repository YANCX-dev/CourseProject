@extends('layouts.admin')


@section('content')
   <div class="container">
       <div class="d-flex row justify-content-center align-items-center admin-el-color rounded ">
           <form method="GET" action="{{ route('admin.cruises')}}">
               @csrf
               <p class="text-center fw-bold fs-4">Пункт отправления:</p>
               <div class="d-flex align-items-center justify-content-center">
                   <input class="rounded border text-center fs-4 m-2 outline-none w-100" name="depFrom" placeholder="Челябинск" value="Челябинск" readonly type="text">
               </div>
               <p class="text-center fw-bold fs-4">Выберите пункт назначения:</p>
               <div class="d-flex flex-column justify-content-center">
                   <select name="dest_point_id" id="routers" class="ticket-bar-select mb-2">
                       @foreach($dest as $dest_point)
                           <option {{old('dest_point_id') == $dest_point->id ? 'selected': ''}} value="{{ $dest_point->id }}">{{ $dest_point->destination }}</option>
                       @endforeach
                   </select>
                   <input type="date" name="departureDate" class="rounded outline-none ticket-bar-input border" value="{{date(now()->format('Y-m-d'))}}">
                   <button type="submit" class="btn btn-dark w-100 mt-2 mb-2">Найти</button>
               </div>
           </form>
       </div>
   </div>
    @if($cruises)
        <div class="container-sm table-responsive">
       <div class="table">
           <table class="table mt-5 table-responsive">
               <thead>
               <tr>
                   <th scope="col">
                       <div class="d-flex justify-content-between align-items-center">
                           <span>Точка отправления</span>
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

               </tr>
               </thead>
               <tbody id="tableCruise" class="table-responsive">
               @foreach($cruises as $cruise)
                   <tr>
                       <th scope="col">{{$route}}</th>
                       <td>{{$cruise->departureDate}}</td>
                       <td>{{$cruise->departureTime}}</td>
                       <td>{{$destination->destination}}</td>
                       <td>{{$cruise->arrivalDate}}</td>
                       <td>{{$cruise->arrivalTime}}</td>
                       <td>{{$cruise->ticketPrice}}</td>
                       <td>
                           <form action="{{ route("deleteCruiseById", $cruise->id) }}" method="POST">
                               @csrf
                               @method("DELETE")
                               <button type="submit" class="btn btn-dark">Удалить</button>
                           </form>
                       </td>
                   </tr>
               @endforeach
               </tbody>
               @elseif(empty($cruises))
                   <div class="container vh-80">
                       <a class="btn btn-dark mt-5 m-1 px-5" href="{{ URL::previous() }}">Назад</a>
                       <h1 class="mt-5 fc-black">Рейсы на указанный маршрут не найдены</h1>
                   </div>
               @endif
           </table>
       </div>
       </div>



@endsection

