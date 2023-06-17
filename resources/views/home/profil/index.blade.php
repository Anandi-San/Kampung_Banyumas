<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>Profile Desa</b></b></h4>
    </div>
    <style>
    .history {
        background-color: #ffffff;
        padding: 20px;
        margin-top: 50px;
        border: 1px solid #eaeaea;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .img-foto {
        width: 100%;
        align-items: center;
    }
</style>
</div>
<div class="container py-3">
    <div class="row align-items-center">
        <div class="col-md-4">
        @if ($profil && $profil->cover)
        <img src="/{{$profil->cover}}"width="100%" alt="">
        @else
        <p>No cover image available</p>
        @endif
        </div>
        <div class="col-md-8">
            <!-- belum buka summernote -->
            @if ($profil && $profil->desc)
                <p>{!! $profil->desc !!}</p>
            @else
                <p>No description available</p>
            @endif
        </div>
        <div class="container my-4">
            <h3 class="text-center">VISI MISI</h3>
            <h4 class="text-center">Mencerdaskan kehidupan warga dan menyejahterakan kehidupan warga melalui wisata</h4>
        </div>
        <div class="container">
    <div class="history">
        <h3>Sejarah Kampung Banyumas</h3>
        <p style="text-align: justify; text-justify: inter-word;">
            Kampung Banyumas memiliki sejarah yang kaya dan unik. Didirikan oleh sekelompok pendatang pada tanggal 3 Maret 1965, kampung ini awalnya hanya dapat dijangkau melalui jalur setapak. Kedatangan mereka melalui kapal dagang, dengan 21 kepala keluarga yang penuh semangat untuk memulai kehidupan baru.
            Saat tiba di pelabuhan Balikpapan, mereka menghadapi tantangan ketika kapal mereka bocor. Tanpa pilihan lain, mereka berjalan kaki hingga mencapai kilo 11, tempat di mana asrama untuk orang transmigrasi berada. Di sana, mereka diberikan peralatan seperti kampak dan gergaji buaya sebagai bekal untuk membangun rumah di sekitar wilayah kampung yang masih penuh dengan hutan.
            Pada awalnya, mata pencaharian utama warga kampung adalah bertani, terutama bercocok tanam padi gunung. Mereka bahkan membakar hutan untuk membuka lahan pertanian. Namun, pada tahun 1992, listrik PLN akhirnya tersedia di kampung ini, memberikan akses yang lebih baik untuk kehidupan sehari-hari.
            <br><br>
            Kampung Banyumas juga dikenal dengan kekayaan seni dan budayanya. Seni tradisional seperti ebeg Banyumasan (TMG) dan seni rebanaan yang dilakukan oleh anak-anak dan ibu-ibu masih tetap dilestarikan. Setiap malam Sabtu, mereka melaksanakan pertunjukan seni hadroh yang menghiasi suasana kampung.
            Bangunan umum seperti posyandu, balai desa, pendopo makam, dan masjid merupakan wujud perhatian warga terhadap kebutuhan masyarakat. Dalam perkembangannya, kampung ini terus tumbuh dan berkembang. Luasnya mencapai 77 hektar dengan mayoritas warganya berasal dari suku Jawa, terutama dari daerah Banyumas.
            Seiring berjalannya waktu, kampung ini telah menjadi tempat tinggal bagi berbagai kelompok masyarakat, termasuk pendatang seperti suku Madura, Bugis, Banjar, dan Buton. Pekerjaan warga mayoritas adalah petani, terutama di sektor holtikultura dengan komoditas seperti sayuran buncis, kacang panjang, terong, dan karet. Selain itu, ada juga peternak ikan, ASN, peternak sapi, buruh bangunan, serta usaha tempe dan batu bata.
            Tidak hanya itu, makanan khas orang Banyumas, seperti tempe mendoan, juga menjadi ciri khas yang melekat erat dengan identitas kampung ini. Semua sejarah dan perjalanan ini mencerminkan semangat dan perjuangan warga Kampung Banyumas dalam membangun kehidupan yang lebih baik dan mempertahankan kearifan lokal mereka.
            </p>
            </div>
            </div>
            <div class="container my-4">
    <h4 class="text-center">Perangkat RT Kampung Banyumas</h4>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-2 text-end">
                <img src="/img/foto.svg" class="img-foto" alt="">
            </div>
            <div class="col-md-3 text-start">
                <h3>Ketua RT</h3>
                <h4>Sukardi</h4>
                <h4>081350169773</h4>
            </div>
            <div class="col-md-2 text-end offset-2">
                <img src="/img/foto.svg" class="img-foto" alt="">
            </div>
            <div class="col-md-3 text-start">
                <h3>SEKETARIS</h3>
                <h4>Kusnanto</h4>
                <h4>+62 812-5325-2375</h4>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2 text-end">
                <img src="/img/foto.svg" class="img-foto" alt="">
            </div>
            <div class="col-md-3 text-start">
                <h3>BENDAHARA</h3>
                <h4>Wahyu Budi Utama</h4>
                <h4>+62 811-5555-5083</h4>
            </div>
            <div class="col-md-2 text-end offset-2">
                <img src="/img/foto.svg" class="img-foto" alt="">
            </div>
            <div class="col-md-3 text-start">
                <h3>Seksi Keagamaan</h3>
                <h4>Ust Komarudin, M. Gufron</h4>
                <h4>+62 813-4680-8480</h4>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2 text-end">
                <img src="/img/foto.svg" class="img-foto" alt="">
            </div>
            <div class="col-md-3 text-start">
                <h3>Seksi Keamanan</h3>
                <h4>Rudianto</h4>
                <h4>+62 852-4723-2859</h4>
            </div>
            <div class="col-md-2 text-end offset-2">
                <img src="/img/foto.svg" class="img-foto" alt="">
            </div>
            <div class="col-md-3 text-start">
                <h3>Seksi Kepemudaan</h3>
                <h4>Andrianto</h4>
                <h4>+62 813-5181-5652</h4>
            </div>
        </div>
    </div>
</div>
            <!-- belum ketengah -->
            <div class="container">
                <h3 class="text-center">Letak Google Maps Kampung Banyumas</h3>
                <div class="d-flex justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.018519693562!2d116.87450257461465!3d-1.1472529988417635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14b95daef3035%3A0x679be287397062a5!2sKampung%20banyumas!5e0!3m2!1sid!2sid!4v1686103362382!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>