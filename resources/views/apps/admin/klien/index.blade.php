@extends('layouts.dashboard')

@section('title')
    Klien
@endsection

@section('content')
    @if(Session::has('flash_message'))
    <script type="text/javascript">
        Swal.fire("Berhasil!","{{ Session('flash_message') }}", "success");
    </script>
    @endif

    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="well with-header with-footer">
                <div class="header bg-red">
                    Data Klien
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <!-- Search -->
                    <div class="d-flex justify-content-between mb-2">
                        <a href="{{ route('admin.klien.create') }}">
                            <button class="btn btn-sm btn-success">Tambah</button>
                        </a>
                        </form>
                    </div>
                    <!-- /Search -->
                    </div>
                </div>
                <table class="table table-hover">
                    <thead class="bordered-darkorange">
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama</th>
                            <th>Logo</th>
                            <th width="30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if (count($klien) === 0)
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

                        @foreach ($klien as $item)
                        <tr>
                            <td>{{ $loop->iteration + $skipped }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="{{ route('admin.klien.download', $item->id) }}">
                                    <button class="btn btn-success btn-sm">download</button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.klien.edit', $item->id) }}">
                                    <button class="btn btn-warning btn-sm">Ubah</button>
                                </a>
                                <form onsubmit="deleteThis(event)" action="{{ route('admin.klien.delete') }}" method="POST" style="display:inline-block">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="footer">
                    {{ $klien->appends(['q_judul' => $q_judul])->links() }}
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