@extends('layouts.single')

@section('content')
	@include('components.frontend.navbar')
	@include('components.frontend.single_banner', ['main_title' => 'Proyek Kami'])  
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <p>
                        <img src="{{ asset('http://localhost:8000/storage/'. $proyek->gambar) }}" alt="" class="img-single">
                      </p>
                    <h2 class="mb-3">{{ $proyek->judul }}</h2>
                    <p>{!! $proyek->deskripsi !!}</p>
                    
                </div> <!-- .col-md-8 -->        
            </div>
        </div>
      </section>
	@include('components.frontend.footer')
@endsection