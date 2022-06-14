@extends('layouts.app')


@section('content')
    @if(session('message'))
        <p class="modal-dialog p-2 rounded fs-5 fc-white" style="background:#6ce391;">{{session('message')}}</p>
    @endif
    {{--    Подключение меню поиска билетов--}}
    @include('inc.ticketbar')
    {{--Подключение новостного блока--}}

    @include('news.index')

    {{--@dd($users[0]->date_string);--}}
@endsection
