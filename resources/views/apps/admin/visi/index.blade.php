@extends('layouts.dashboard')

@section('title')
    Visi
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
                    Data Visi
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <!-- Search -->
                    <div class="d-flex justify-content-between mb-2">
                        <a href="{{ route('sub_edukasi.create', $education->id) }}">
                        <button class="btn btn-sm btn-primary">Tambah</button>
                        </a>
                        <form action="{{ route('sub_edukasi', $education->id) }}">
                            <div class="d-flex">
                            <i class="bx bx-search fs-4"></i>
                            <input
                                style="padding: 0px 10px"
                                type="number"
                                class="form-control border-0 shadow-none"
                                placeholder="judul"
                                aria-label="judul"
                                name="q_judul"
                                value="{{ $q_judul }}"
                            />
                            </div>
                            <button style="display: none" type="submit"></button>
                        </form>
                    </div>
                    <!-- /Search -->
                </div>
                <table class="table table-hover">
                    <thead class="bordered-darkorange">
                        <tr>
                            <th width="5%">#</th>
                            <th>Isi</th>
                            <th width="30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if (count($visi) === 0)
                        <tr>
                            <td colspan="8" style="text-align:center">
                                @if ($q_judul == "")
                                    <span>Data Kosong</span>
                                @else
                                    <span>Kriteria yang anda cari tidak sesuai</span>
                                @endif
                            </td>
                        </tr>
                        @endif

                        @foreach ($visi as $item)
                        <tr>
                            <td>{{ $loop->iteration + $skipped }}</td>
                            <td>{!! Str::limit($item->deskripsi, $limit = 150, $end = '...') !!}</td>
                            <td>
                                <a href="{{ route('admin.visi.edit', $item->id) }}">
                                    <button class="btn btn-warning btn-sm">Ubah</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="footer">
                    {{ $visi->appends(['q_judul' => $q_judul])->links() }}
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