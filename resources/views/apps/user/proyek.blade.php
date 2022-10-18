@extends('layouts.single')

@section('content')
	@include('components.frontend.navbar')
	@include('components.frontend.single_banner', ['main_title' => 'Proyek Kami'])  
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($proyek as $item)
                    <div class="col-md-4">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('http://localhost:8000/storage/'. $item->gambar) }}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{ asset('http://localhost:8000/storage/'. $item->gambar) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="{{ route('proyek.detail', $item->id) }}">{{ $item->nama }}</a></h3>
                                <span>{{ $item->jenis }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      </section>
	@include('components.frontend.footer')
@endsection