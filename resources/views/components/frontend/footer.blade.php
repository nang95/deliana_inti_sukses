<footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">PT. Deliana Inti Sukses</h2>
            <p>{!! Str::limit($profil_footer->deskripsi, $limit = 150, $end = '...') !!}</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="{{ $kontak_footer->twitter_url }}"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="{{ $kontak_footer->facebook_url }}"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="{{ $kontak_footer->instagram_url }}"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Link Terkait</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>PT. Firma Hukum</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Bisnis</h2>
            <ul class="list-unstyled">
              @foreach ($bisnis_footer as $item)     
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>{{ $item->nama }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kontak</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">{{ $kontak_footer->alamat }}</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $kontak_footer->no_telp }}</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $kontak_footer->email }}</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> MW Project</p>
          <p style="opacity: 0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
      </div>
    </div>
  </footer>