@extends('layouts.dashboard')

@section('title')
    Kontak
@endsection

@section('content')
@if(Session::has('flash_message'))
<script type="text/javascript">
    Swal.fire("Berhasil!","{{ Session('flash_message') }}", "success");
</script>
@endif

<div class="row">
    <div class="col-lg-8 col-sm-8">
        <div class="widget">
            <div class="widget-header bordered-top bordered-palegreen">
                <span class="widget-caption">Edit Data</span>
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
                    <form role="form" action="{{ route('admin.kontak.update') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }} {{ method_field('PUT') }}

                        <input type="hidden" name="id" value="{{ $kontak->id }}">

                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <textarea name="lokasi" class="form-control input-sm" cols="3" rows="3">{{ $kontak->lokasi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="facebook_url">Facebook Url</label>
                            <input type="text" name="facebook_url" value="{{ old('facebook_url', $kontak->facebook_url) }}" class="form-control input-sm" id="gambar">
                        </div>

                        <div class="form-group">
                            <label for="facebook_url">Instagram Url</label>
                            <input type="text" name="facebook_url" value="{{ old('facebook_url', $kontak->facebook_url) }}" class="form-control input-sm" id="gambar">
                        </div>

                        <div class="form-group">
                            <label for="twitter_url">Twitter Url</label>
                            <input type="text" name="twitter_url" value="{{ old('twitter_url', $kontak->twitter_url) }}" class="form-control input-sm" id="gambar">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                </div>
                                <div class="col-md-6" style="text-align:right">
                                    <a href="{{ route('admin.kontak') }}">
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


@section('footer-scripts')
<script type="text/javascript">
    function deleteThis(e){
        e.preventDefault();
        Swal.fire({
        title: "<div style='font-size:20px'>Apakah anda yakin?</div>",
        html: "<div style='font-size:15px'>Data akan dihapus secara permanen!</div>",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
        })
        .then((res) => {
            if (res.isConfirmed) {
                e.target.submit();
                swal("Data telah dihapus!", {
                icon: "success",
                });
            }
        });

        return false;
    }
</script>
@endsection
