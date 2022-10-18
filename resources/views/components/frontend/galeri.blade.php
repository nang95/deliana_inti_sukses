<section class="ftco-section ftco-project bg-light" data-section="projects">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Galeri</span>
                <h2 class="mb-4">Galeri Kami</h2>
                <p>Lihat Kegiatan-kegiatan kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 testimonial">
                <div class="container">
                    <div class="row">
                        @foreach ($galeri as $item)
                            <div class="col-md-4">
                                <div class="project">
                                    <div class="img">
                                        <img src="{{ asset('http://localhost:8000/storage/'. $item->foto) }}" class="img-fluid" alt="Colorlib Template">
                                        <a href="{{ asset('http://localhost:8000/storage/'. $item->foto) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                            <span class="icon-expand"></span>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">{{ $item->judul }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>