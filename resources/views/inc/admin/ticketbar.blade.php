<div class="container admin-el-color rounded mb-4">
    <div class="d-flex row justify-content-center align-items-center grid-sm-column">
        <h2 class="m-2 text-center mb-4">Билеты и расписание</h2>
    </div>
    <div class="d-flex row justify-content-center align-items-center ">
        <form method="GET" action="{{ route('admin.cruises')}}">
            @csrf
            <p class="text-center fw-bold fs-4">Пункт отправления:</p>
            <div class="d-flex align-items-center justify-content-center">
                <input class="rounded border text-center fs-4 m-2 outline-none w-100" name="depFrom"
                       placeholder="Челябинск" value="Челябинск" readonly type="text">
            </div>
            <p class="text-center fw-bold fs-4">Выберите пункт назначения:</p>
            <div class="d-flex flex-column justify-content-center">
                <select name="dest_point_id" id="routers" class="ticket-bar-select mb-2">
                    @foreach($dest as $dest_point)
                        <option {{old('dest_point_id') == $dest_point->id ? 'selected': ''}} value="{{ $dest_point->id }}">{{ $dest_point->destination }}</option>
                    @endforeach
                </select>
                <input type="date" name="departureDate" class="rounded outline-none ticket-bar-input border"
                       value="{{date(now()->format('Y-m-d'))}}">
                <button type="submit" class="btn btn-dark w-100 mt-2 mb-2" >Найти</button>
            </div>
        </form>
    </div>
</div>


