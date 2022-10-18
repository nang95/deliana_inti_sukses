@extends('layouts.single')

@section('content')
	@include('components.frontend.navbar')
	@include('components.frontend.single_banner', ['main_title' => 'Tentang Kami'])  
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <p>
                        <img src="{{ asset('http://localhost:8000/storage/'. $profil->gambar) }}" alt="" class="img-single">
                      </p>
                    <h2 class="mb-3">Tentang Kami</h2>
                    <p>{!! $profil->deskripsi !!}</p>
                    
                </div> <!-- .col-md-8 -->        
            </div>
        </div>
      </section>
	@include('components.frontend.footer')
@endsection