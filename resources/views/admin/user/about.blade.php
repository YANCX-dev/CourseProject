@extends('layouts.admin')

@section('content')
   <div class="container">
       <div class="card admin-el-color">
           <h2 class="m-2">Информация о пассажирах</h2>
           <div class="card-body">
               <form action="{{ route('adminUser') }}" method="POST">
                   @csrf
                   <div class="">
                       <span class="fc-white fs-5">Выберите пользователя:</span>
                       <div>
                           <select name="user" id="userInfo" class="form-select">
                               @foreach($users as $user)
                                   <option value="{{ $user->id }}"> {{ $user->name }} {{ $user->surname }}</option>
                               @endforeach
                           </select>
                       </div>
                   </div>
                   <button type="submit" class="mt-2 rounded btn-dark w-100">Посмотреть</button>
               </form>
           </div>
       </div>
   </div>

@endsection
