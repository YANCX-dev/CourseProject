@extends('layouts.admin')



@section('title','Пункты назначения')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card admin-el-color">
                    <div class="card-header fs-5 fc-white fc-white">Добавление точки назначения</div>
                    <div class="card-body">
                        <form action="{{ route('addDest') }}" method="POST">
                            @csrf
                            <div class="">
                                <span class="fc-black fs-5">Название новой точки назначения:</span>
                                <div>
                                    <input type="text" name="destination" class="bg-light rounded border w-100" required>
                                </div>
                                @error('destinationAdd')
                                <p class="error-bg"><small class="error">{{$message}}</small></p>
                                @enderror
                            </div>
                            <button type="submit" class="mt-2 rounded btn-dark w-100">Добавить</button>
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
                                <span>#Точки назаначения</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Название точки назначения</span>
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
                    @foreach($destinations as $dest)
                        <tr>
                            <th scope="col">{{$dest->id}}</th>
                            <td>{{$dest->destination}}</td>
                            <td>
                                <a href="{{ route('deleteDest',$dest->id) }}" class="btn btn-dark">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
