@extends('../adminlayot')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
            </div>
            <div class="">
                <form action="{{ url('kasir/tambah') }}" method="post">
                    @csrf
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">alamat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="alamat">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">telepon</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="telepon" id="telepon"
                                    placeholder="telepon">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">username</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="username" id="username"
                                    placeholder="username">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">stok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="password" id="password"
                                    placeholder="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">akses</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="akses" id="akses"
                                    placeholder="akses">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Diskon</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="diskon" id="diskon"
                                    placeholder="Diskon">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-8">
                                <button class="btn btn-primary w-100 m-2" type="submit">Kirim</button>
                                <a href="{{url ('buku')}}" class="btn btn-primary w-100 m-2" type="reset">Kembali</a>
                            </div>
                        </div>
                </form>
                </table>
            </div>
        </div>
    </div>
@endsection
