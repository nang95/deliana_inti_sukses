<section class="ftco-section" data-section="team">
    <div class="container-fluid p-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Founder</span>
                <h2 class="mb-4">Founder PT. Deliana Inti Sukses</h2>
                <p>Perkenalkan Founder Dari PT. Deliana Inti Sukses.</p>
            </div>
        </div>
        <div class="row no-gutters">
            @foreach ($founder as $item)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset('images/team-1.jpg') }});"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div class="text-center">
                            <span class="position mb-2">{{ $item->jabatan }}</span>
                            <h3 class="mb-4">{{ $item->nama }}</h3>
                            <div class="faded" style="opacity: 0">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>