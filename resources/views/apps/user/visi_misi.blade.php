@extends('layouts.single')

@section('content')
	@include('components.frontend.navbar')
	@include('components.frontend.single_banner', ['main_title' => 'Visi Misi Perusahaan'])  
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">Visi Misi Perusahaan</h2>
                    <h2 class="mb-3">Visi</h2>
                    <ul>
                        @foreach ($visi as $item)
                            <li>{!! $item->deskripsi !!}</li>
                        @endforeach
                    </ul>
                    <h2 class="mb-3">Misi</h2>
                    <ul>
                        @foreach ($misi as $item)
                            <li>{!! $item->deskripsi !!}</li>
                        @endforeach
                    </ul>
                    
                </div> <!-- .col-md-8 -->        
            </div>
        </div>
      </section>
	@include('components.frontend.footer')
@endsection