<style>
    .menu-active{
        color: black !important;
        font-weight: bold;
    }
</style>
<header>
      <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="container">
              <i class="navbar-brand" href="#">Desa Banyumas</i>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                          <a class="nav-link" href="/">Beranda</a>
                      </li>
                      <li class="nav-item {{ Request::is('profil') ? 'active' : '' }}">
                          <a class="nav-link" href="profil">Profil</a>
                      </li>
                      <li class="nav-item {{ Request::is('potensi') ? 'active' : '' }}">
                          <a class="nav-link" href="potensi">Potensi & Produk</a>
                      </li>
                      <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                          <a class="nav-link" href="blog">Galeri</a>
                      </li>
                      <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}">
                          <a class="nav-link" href="kontak">Kontak</a>
                      </li>
                  </ul>
                  <form class="d-flex">
                      @auth
                          <a href="/admin/dashboard" class="btn btn-danger"><i class="fas fa-user"></i>dashboard</a>
                      @else
                          <a href="/login" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>Login</a>
                      @endauth
                  </form>
              </div>
          </div>
</nav>

    </header>