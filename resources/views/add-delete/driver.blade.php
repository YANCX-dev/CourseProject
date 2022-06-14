@extends('layouts.admin')






@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-white el-color mt-4">
                    <div class="card-header fs-5 fc-white">Добавление водителя</div>
                    <div class="card-body">
                        <form action="{{ route('addDriver') }}" method="POST">
                            @csrf
                            <span class="fc-black fs-5">Введите имя:</span>
                            <div>
                                <input type="text" name="name" id="name" class="form-text w-100 rounded p-1 border" required>
                            </div>
                            <span class="fc-black fs-5">Введите фамилию:</span>
                            <div>
                                <input type="text" name="surname" id="surname" class="form-text w-100 rounded p-1 border" required>
                            </div>
                            <span class="fc-black fs-5">Введите возраст:</span>
                            <div>
                                <input type="number" name="age" id="age" class="form-text w-100 rounded p-1 border" required>
                            </div>
                            <span class="fc-black fs-5">Введите стаж:</span>
                            <div>
                                <input type="number" name="exp" id="exp" class="form-text w-100 rounded p-1 border" required>
                            </div>
                            <span class="fc-black fs-5">Введите № водительского удовстоверения:</span>
                            <div>
                                <input type="text" name="driverLicense" id="driverLicense" class="form-text w-100 rounded p-1 border" required>
                            </div>
                            @error('addDriver')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                            <button type="submit" class="btn btn-dark w-100 mt-2">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>#Водителя</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Имя водителя</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Фамилия водителя</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Возраст</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Стаж(лет)</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Номер водительсьского удостоверения</span>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="tableCruise" class="table-responsive">
                    @foreach($drivers as $driver)
                        <tr>
                            <th class="text-center" scope="col">{{$driver->id}}</th>
                            <td class="text-center">{{$driver->name}}</td>
                            <td class="text-center">{{$driver->surname}}</td>
                            <td class="text-center">{{$driver->age}}</td>
                            <td class="text-center">{{$driver->exp}}</td>
                            <td class="text-center">{{$driver->driverLicense}}</td>
                            <td>
                                <a class="btn btn-dark">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
