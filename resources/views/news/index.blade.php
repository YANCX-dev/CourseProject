@if(count($news) > 0)
    <div class="container-fluid mt-5">
        <div class="row pb-5">
            <div class="d-grid col justify-content-center align-items-center news-title p-2">
                <h2 class="fc-white">Новости</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gap-3">
            @foreach($news as $new)
                @include('inc.news')
            @endforeach
            <div class="d-flex justify-content-center align-items-center ">
                <div class="nav-buttons">{{$news->onEachSide(0)->links() }}</div>
            </div>
        </div>
    </div>
@else
    <div class="container mt-5 w-100">
        <div class="row pb-5">
            <div class="d-grid col el-color justify-content-center align-items-center ">
                <h2>В данный момент новостей нет</h2>
            </div>
        </div>
    </div>
@endif



