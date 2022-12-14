@extends('layouts.dashboard')

@section('title')
    Galeri
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-sm-8">
        <div class="widget">
            <div class="widget-header bordered-top bordered-palegreen">
                <span class="widget-caption">Tambah Data</span>
            </div>
            
            <div class="widget-body">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif
                <div class="collapse in">
                    <form role="form" action="{{ route('admin.galeri.insert') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }} {{ method_field('POST') }}

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control input-sm" id="gambar">
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control input-sm" id="foto">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                </div>
                                <div class="col-md-6" style="text-align:right">
                                    <a href="{{ route('admin.galeri') }}">
                                        <button class="btn btn-danger btn-sm" type="button">Batal</button>
                                    </a>  
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection