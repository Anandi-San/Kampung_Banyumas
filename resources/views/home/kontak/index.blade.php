<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>Kontak</b></b></h4>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 my-5">
             <div class="card">
                 <div class="card-body">
                    <form action="/kontak/send" method="POST">
                        @csrf
                    <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="masukkan nama anda">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>  
                        <div class="form-group mt-4">
                            <label for="">Isi Pesan</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="form-control @error ('name') is-invalid @enderror" placeholder="Masukkan Pesan Anda" ></textarea>
                            @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <Button type="submit" class="btn btn-success">KIRIM</Button>
                     </form>
                 </div>
             </div> 
         </div>
         <div class="col-md-6 my-5">
            <div class="d-flex">
                <i class="fas fa-phone fa-2x"></i><h3>08</h3>
            </div>
            <div class="d-flex mt-3">
                <i class="fas fa-envelope fa-2x"></i><h3>kampungbanyumasbppn@gmail.com</h3>
            </div>
            <div class="d-flex mt-3">
                <i class="fas fa-map-marker fa-2x"></i><h3>Kampung Banyumas KM 15</h3>
            </div>
         </div>
    </div>
</div>