@extends('layouts.single')

@section('content')
	@include('components.frontend.navbar')
	@include('components.frontend.single_banner', ['main_title' => 'Bisnis Kami'])  
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <p>
                        <img src="{{ asset('http://localhost:8000/storage/'. $bisnis->gambar) }}" alt="" class="img-single">
                      </p>
                    <h2 class="mb-3">{{ $bisnis->judul }}</h2>
                    <p>{!! $bisnis->deskripsi !!}</p>
                    
                </div> <!-- .col-md-8 -->        
            </div>
        </div>
      </section>
	@include('components.frontend.footer')
@endsection