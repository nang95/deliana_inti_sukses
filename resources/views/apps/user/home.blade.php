@extends('layouts.home')

@section('content')
	@include('components.frontend.navbar')
	@include('components.frontend.hero')
	@include('components.frontend.layanan')
	@include('components.frontend.profil')
	@include('components.frontend.proyek')
	@include('components.frontend.sambutan')
	@include('components.frontend.tim')
	@include('components.frontend.bisnis')
	@include('components.frontend.kontak')
	@include('components.frontend.footer')
@endsection