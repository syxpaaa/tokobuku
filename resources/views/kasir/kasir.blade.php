@extends('../adminlayot')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
                <a href="{{url ('kasir/tambah')}}">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">nama</th>
                            <th scope="col">alamat</th>
                            <th scope="col">telepon</th>
                            <th scope="col">username</th>
                            <th scope="col">password</th>
                            <th scope="col">akses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $ambil)
                            <tr>
                                <td>{{$ambil->id_kasir}}</td>
                                <td>{{$ambil->nama}}</td>
                                <td>{{$ambil->alamat}}</td>
                                <td>{{$ambil->telepon}}</td>
                                <td>{{$ambil->username}}</td>
                                <td>{{$ambil->password}}</td>
                                <td>{{$ambil->akses}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"  href="{{url('kasir/edit/'. $ambil->id_kasir)}}"><i class="bi bi-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href="{{url('kasir/hapus/'. $ambil->id_kasir)}}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection