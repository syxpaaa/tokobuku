@extends('../adminlayot')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
                <a href="{{url ('buku/tambah')}}">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga pokok</th>
                            <th scope="col">Harga jual</th>
                            <th scope="col">Diskon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $ambil)
                            <tr>
                                <td>{{$ambil->id_buku}}</td>
                                <td>{{$ambil->judul}}</td>
                                <td>{{$ambil->penulis}}</td>
                                <td>{{$ambil->penerbit}}</td>
                                <td>{{$ambil->tahun_terbit}}</td>
                                <td>{{$ambil->stok}}</td>
                                <td>{{$ambil->harga_pokok}}</td>
                                <td>{{$ambil->harga_jual}}</td>
                                <td>{{$ambil->diskon}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"  href="{{url('buku/edit/'. $ambil->id_buku)}}"><i class="bi bi-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href="{{url('buku/hapus/'. $ambil->id_buku)}}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection