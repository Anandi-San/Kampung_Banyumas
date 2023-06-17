<style>
    .wrapper-img-banner {
        max-width: 100%;
        max-height: 400px;
    }

    .img-banner {
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        @foreach ($banner as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="wrapper-img-banner">
                    <img src="/{{ $item->gambar }}" width="100%" class="img-banner" alt="">
                </div>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>{{ $item->headline }}</h1>
                        <p>{{ $item->desc }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5">
    <div class="text-center">
        <h4 class="">Tentang Desa</h4>
    </div>
    <div class="row align-items-center">
        <div class="col-md-6">
            @if ($profil)
            <img src="/{{ $profil->cover }}" width="100%" class="img-tentang-desa" alt="">
            @endif
        </div>
        <div class="col-md-6">
            @if ($desc)
            <p>
            {!! $profil->desc !!}
            </p>
            @endif
        </div>
    </div>
</div>

<div class="bg-success my-5">
    <div class="container py-5">
        <div class="text-white">
            <h5>Pelajari Lebih Lanjut</h5>
            <p>Pelajari Lebih lanjut dengan data data seperti sejarah dari terbentuknya desa kemudian Visi Misi dan Kerangka Kerja Desa</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="text-center">
        <h4 class="">Potensi Kami</h4>
    </div>
    <div class="row">
        @if ($desc)
        @foreach ($potensi as $item)
            <div class="col-md-3">
                <div class="text-center">
                    <i class="{{$item->icon}}"></i>
                    <h5><b>{{ $item->title }}</b></h5>
                    <p>{{ $item->desc ?? ''}}</p>
                </div>
            </div>
        @endforeach
        @endif
    </div>
    <div class="text-center mt-3">
        <a href="/potensi" class="btn btn-success px-5 text-center">Selengkapnya</a>
    </div>
</div>

<div class="container my-2">
    <div class="text-center">
        <h4 class="">Dokumentasi Desa</h4>
    </div>
    <div class="row">
        @foreach ($blog as $item)
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="wrapper-card-blog">
                        <img src="/{{ $item->cover ?? ''}}" class="img-card-blog" alt="">
                    </div>
                    <div class="p-3">
                        <a href="" class="text-decoration-none"><h5>{{ $item->title ?? '' }}</h5></a>
                        <p>{!! Illuminate\Support\Str::limit($item->body ?? '', 50) !!}</p>
                    </div>
                    <a href="/blog/show/{{ $item->id ?? ''}}" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="bg-success my-5">
    <div class="container py-5">
        <div class="text-white">
            <h5>Pelajari Lebih Lanjut</h5>
            <p>Pelajari Lebih lanjut mulai dari bidang bidang yang bisa menjadi potensi Kampung Banyumas dengan dokumentasi-dokumentasi desa yang mengabadikan moment-moment ya</p>
        </div>
    </div>
</div>

<div class="container my-2 mb-5">
    <div class="text-center">
        <h4 class="">Hubungi Kami</h4>
        <a href="https://api.whatsapp.com/send?phone=6281350169773" class="btn btn-success px-5 " target="blank"><i class="fas fa-phone"></i>Hubungi Kami di
            WhatsApp</a>
    </div>
</div>
