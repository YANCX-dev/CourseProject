@extends('layouts.app')



@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="container min-vh-100 mt-5">
           <div> {!! $article[$pageId - 1]->content !!}</div>
        </div>
    </div>
@endsection
