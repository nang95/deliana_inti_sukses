<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('http://localhost:8000/storage/'. $profil->gambar) }});">
                    <div class="request-quote py-5">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">PT. Deliana Inti Sukses</span>
                        <h2 class="mb-4">{{ $profil->judul }}</h2>
                        <p>{!! $profil->deskripsi !!}</p>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="5">0</strong>
                                <span>Tahun Pengalaman</span>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Project Kedepan</span>
                            </div>
                        </div>
                      </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                                <span>Project Berhasil</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Klien</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>