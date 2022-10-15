@extends('layouts.dashboard')

@section('title')
    Galeri
@endsection

@section('content')
    @if(Session::has('flash_message'))
    <script type="text/javascript">
        Swal.fire("Berhasil!","{{ Session('flash_message') }}", "success");
    </script>
    @endif

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="well with-header with-footer">
                <div class="header bg-red">
                    Data Galeri
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <a href="{{ route('admin.galeri.create') }}">
                            <button class="btn btn-sm btn-success">Tambah</button>
                        </a>
                    </div>
                </div>
                
                <div class="row">
                    @if (count($galeri) === 0)
                        <div class="col-md-12" style="text-align: center"><h5><b>Data Kosong</b></h5></div>
                    @endif
                    @foreach ($galeri as $item)
                    <div class="col-md-4">
                        <div class="img-galeri-wrapper">
                            <div class="overlay-galeri">
                                <div class="title-wrapper">
                                    <div class="title-galeri">{{ $item->judul }}</div>
                                    <div>
                                        <form onsubmit="deleteThis(event)" action="{{ route('admin.galeri.delete') }}" method="POST" style="display:inline-block">
                                            {{ csrf_field() }} {{ method_field('DELETE') }}
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('http://localhost:8000/storage/'.$item->foto) }}" class="img-galeri" alt="">
                        </div>
                    </div>  
                    @endforeach
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