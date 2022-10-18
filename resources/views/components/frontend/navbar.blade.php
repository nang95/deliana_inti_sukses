<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" style="width: 30%;" href="index.html"><div id="logo"><img src="{{ asset('images/full_logo_white.png') }}" width="40%" alt="" srcset=""></div></a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="{{ route('/') }}" class="nav-link"><span>Beranda</span></a></li>
          <li class="nav-item"><a href="{{ route('visi_misi') }}" class="nav-link"><span>Visi & Misi</span></a></li>
          <li class="nav-item"><a href="{{ route('tentang_kami') }}" class="nav-link"><span>Tentang Kami</span></a></li>
          <li class="nav-item"><a href="{{ route('proyek') }}" class="nav-link"><span>Proyek</span></a></li>
          <li class="nav-item"><a href="{{ route('bisnis') }}" class="nav-link"><span>Bisnis</span></a></li>
          <li class="nav-item"><a href="{{ route('galeri') }}" class="nav-link"><span>Galeri</span></a></li>
          <li class="nav-item"><a href="{{ route('kontak') }}" class="nav-link"><span>Kontak</span></a></li>
        </ul>
      </div>
    </div>
</nav>