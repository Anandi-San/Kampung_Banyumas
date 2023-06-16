<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>Galeri</b></b></h4>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        @foreach ($blog as $item)
        <div class="col-md-3 my-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                    <img src="/{{$item->cover}}" class="img-card-blog" alt="">
                </div>
                <div class="p-3">
                <a href="/blog/show/{{$item->id}}"class="text-decoration-none"><h5>{{$item->title}}</h5></a>
                    {!! Illuminate\Support\Str::limit($item->body, 50) !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
