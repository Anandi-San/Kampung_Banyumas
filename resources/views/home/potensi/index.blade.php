<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>POTENSI & PRODUK</b></h4>
    </div>
</div>
<!-- <div class="container"> -->
    <div class="row mt-5">
    @foreach ($potensi as $item)
     <div class="col-md-3 my-3">
        <div class= "text-center">
        <i class="{{$item->icon}}"></i>
        <h5><b>{{$item->title}}</b></h5>
        <p>
             {!! Illuminate\Support\Str::limit($item->desc, 50) !!}
        </p>
        </div>
     </div>
     @endforeach
    </div>
</div>