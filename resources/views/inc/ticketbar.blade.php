<div class="container-fluid d-flex align-items-center flex-column justify-content-center ticket-bar-image vh-50">
    <div class="container">
        <div class="ticket-bar-border">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1>Билеты и расписание</h1>
                <form method="GET" action="{{ route('cruises')}}">
                    @csrf
                    <input class="ticket-bar-input border" name="depFrom" placeholder="Челябинск" value="Челябинск" readonly type="text">
                    <select name="dest_point_id" id="routers" class="ticket-bar-select h-100 border">
                        @foreach($dest as $dest_point)
                            <option {{old('dest_point_id') == $dest_point->id ? 'selected': ''}} value="{{$dest_point->id }}">{{$dest_point->destination}}</option>
                        @endforeach
                    </select>
                    <input type="date" name="departureDate" class="ticket-bar-input border" value="{{date(now()->format('Y-m-d'))}}">
                    <button type="submit" class="ticket-bar-button border fs-5 fw-bold">Найти</button>
                </form>
            </div>
        </div>
    </div>
</div>
