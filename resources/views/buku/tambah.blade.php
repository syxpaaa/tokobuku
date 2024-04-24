@extends('../adminlayot')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
            </div>
            <div class="">
                <form action="{{ url('buku/tambah') }}" method="post">
                    @csrf
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="judul" id="Judul"
                                    placeholder="Judul">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">penulis</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="penulis" id="penulis"
                                    placeholder="penulis">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">penerbit</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="penerbit" id="penerbit"
                                    placeholder="penerbit">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tahun Terbit</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit"
                                    placeholder="Tahun Terbit">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">stok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">harga pokok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="harga_pokok" id="harga_pokok"
                                    placeholder="Harga Pokok">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">harga jual</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="harga_jual" id="harga_jual"
                                    placeholder="Harga Jual">
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
                            {{-- <label class="col-sm-2 col-form-label" for="basic-default-name">Diskon</label> --}}
                            <div class="col-sm-8">
                                {{-- <input type="text" class="form-control" name="diskon" id="diskon" placeholder="Diskon"> --}}
                                <button class="btn btn-primary w-100 m-2" type="submit">Button</button>
                            </div>
                        </div>
                        {{-- <div class="col-sm-12 col-xl-6">
                            <div class="m-2">
                                <button class="btn btn-outline-primary w-100 m-2" type="button">Button</button>
                            </div>
                        </div> --}}
                </form>
                </table>

            </div>
        </div>
    </div>
@endsection
