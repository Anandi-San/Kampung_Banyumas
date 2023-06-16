   <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body bg-primary">
          Selamat Datang {{auth()->user()->name}} di halaman admin
        </div>
      </div>
    </div>
   </div>
   
   
   <div class="row">   
       <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah pesan</span>
                <span class="info-box-number">
                  {{$pesan}}
                  <small>Pesan</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Galeri</span>
                <span class="info-box-number">
                  {{$blog}}
                  <small>Pesan</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Potensi & Produk</span>
                <span class="info-box-number">
                  {{$potensi}}
                  <small>Potensi & Produk</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah User</span>
                <span class="info-box-number">
                  {{$user}}
                  <small>User</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
        </div>
    </div>    
