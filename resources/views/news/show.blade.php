@extends('layouts.app')

@section('content')
{{--    <a href="{{ URL::previous() }}" class="btn btn-dark">Назад</a>--}}
{{--    --}}
{{--    <span class="fc-black fs-3">{{$news->content}}</span>--}}
{{--    <p class="mt-2 p-1 fs-5">Дата: {{date('d.m.Y', strtotime($news->created_at))}}</p>--}}
  <div class="container-fluid min-vh-100 white-el-color">
      <div class="container">
          <div class="row mt-5">
              <div class="col-lg-12">
                  <h1 class="text-center mt-5 fs-2 justify-content-center font-color">{{$news->title}}</h1>
              </div>
          </div>
          <div class="mt-5 row">
              <div class="col-lg-12">
                  <p class="fc-black fs-20px font-color text-center">{{$news->content}}</p>
              </div>
          </div>
          <div class="mt-5 row">
              <div class="col-lg-12">
                 <div class="d-flex justify-content-center align-items-center">
                     <img src="{{'/storage/news/'.$news->image}}" alt="image" style="width: 50%; height: 80%;">
                 </div>
              </div>
          </div>
      </div>
  </div>

@endsection

