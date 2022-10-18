<section class="ftco-section contact-section ftco-no-pb" data-section="contact">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Kontak</span>
          <h2 class="mb-4">Lokasi Kami</h2>
      
        </div>
      </div>
      <div class="row no-gutters block-9">
        <div class="col-md-12">
            <div id="map" class="bg-white">
              <iframe src="{{ $kontak->lokasi }}" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-6 col-lg-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Alamat</h3>
              <p>{{ $kontak->alamat }}</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">No. Telp</h3>
              <p><a href="tel://1234567920">{{ $kontak->no_telp }}</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email</h3>
              <p><a href="{{ $kontak->email }}">{{ $kontak->email }}</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-alarm"></span>
                </div>
                <h3 class="mb-4">Jam Buka</h3>
              <p><a href="#">07:00 - 17:00</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>