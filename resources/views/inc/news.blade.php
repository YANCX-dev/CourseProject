<div class="col shadow rounded-top p-3">
    <div class="d-grid justify-content-center align-items-center p-3 rounded mb-2 w-100 shadow white-el-color">
        <a href="{{ route("news.show", $new->id)}}"
           class="text-content fs-3  rounded justify-content-center text-decoration-none link-dark"
           style="white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">{{$new->title}}</a>
    </div>
    <div class="news-info content bg-white rounded p-3">
        <a href="{{ route("news.show", $new->id)}}"
           class="text-content fs-20px text-decoration-none fc-black link-dark">{{$new->content}}</a>
    </div>
    <p class="p-3 fs-5"><strong>Дата: </strong>{{date('d.m.Y Время: H:i', strtotime($new->created_at))}}</p>
</div>


