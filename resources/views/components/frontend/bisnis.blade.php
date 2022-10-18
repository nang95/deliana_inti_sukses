<section class="ftco-section ftco-project bg-light" data-section="projects">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Bisnis</span>
                <h2 class="mb-4">Bisnis Kami</h2>
                <p>Perkenalkan Bisnis-Bisnis Besar Kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 testimonial">
                <div class="carousel-project owl-carousel">
                    @foreach ($bisnis as $item)
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('http://localhost:8000/storage/'. $item->gambar) }}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{ asset('http://localhost:8000/storage/'. $item->gambar) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="{{ route('bisnis.detail', $item->id) }}">{{ $item->nama }}</a></h3>
                                <span>{{ $item->jenis }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>