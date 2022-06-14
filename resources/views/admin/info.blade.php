@extends('layouts.admin')




@section('content')

    <div class="container-fluid min-vh-100">
        <div class="row">
            <div class="col-lg-6">
                @error('message')
                <p class="fs-20px fw-bold">{{$message}}</p>
                @enderror
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>#Новости</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Название новости</span>
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
                    @foreach($news as $new)
                        <tr>
                            <th scope="col">{{$new->id}}</th>
                            <td>{{$new->title}}</td>
                            <td>
                                     <a href="{{ route('newDelete',$new->id) }}" class="btn btn-dark">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="admin-el-color rounded p-2">
                        <div class="card-header fs-3 fc-white">Добавление страницы с информацией:</div>
                        <form method="post" action="{{ route('addArticle') }}" class="p-2">
                            @csrf
                            <div class="d-flex flex-column">
                                <span class="fc-white fs-5 p-2">Введите название страницы:</span>
                                <input type="text" class="border p-2 rounded mb-2" style="" name="name" required>
                            </div>
                            <textarea id="myeditorinstance" name="pageContent"></textarea>
                            @error('addPage')
                            <p class="error-bg"><small class="error">{{$message}}</small></p>
                            @enderror
                            <button class="btn btn-dark mt-2 p-1 w-100" type="submit">Добавить</button>
                        </form>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="card admin-el-color">
                        <div class="card-header fs-3 fc-white">Добавление новостей:</div>
                        <div class="card-body">
                            <form action="{{ route('addNew') }}" method="POST">
                                @csrf
                                <div class="">
                                    <span class="fc-white fs-5 ">Заголовок новости:</span>
                                    <div>
                                        <input type="text" name="newTitile" class="bg-light rounded border w-100" required>
                                    </div>
                                    <span class="fc-white fs-5">Контент новости:</span>
                                    <div>
                                        <textarea name="newContent" id="" cols="30" rows="10" class="rounded w-100"></textarea>
                                    </div>
                                    @error('destinationAdd')
                                    <p class="error-bg"><small class="error">{{$message}}</small></p>
                                    @enderror
                                </div>
                                <button type="submit" class="mt-2 rounded btn-dark p-1 w-100">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


















@section('scripts')
    <script src="https://cdn.tiny.cloud/1/1726dq0w1760oj6yn4u0eulfje7lfees98cbnajyuy1e0y0n/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'powerpaste advcode table lists checklist',
            toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'

        });
    </script>
@endsection
