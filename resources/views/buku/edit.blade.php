@extends('../adminlayot')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
            </div>
            <div class="">
               <form action="{{ url('buku/edit/'.$editbu->id_buku) }}" method="post">
                    @csrf
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="judul" id="judul" value="{{ $editbu->judul }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">penulis</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="penulis" id="penulis"
                                    value="{{ $editbu->penulis }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">penerbit</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="penerbit" id="penerbit"
                                    value="{{ $editbu->penerbit }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tahun Terbit</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit"
                                    value="{{ $editbu->tahun_terbit }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">stok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="stok" id="stok" value="{{ $editbu->stok }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">harga pokok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="harga_pokok" id="harga_pokok"
                                    value="{{ $editbu->harga_pokok }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">harga jual</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="harga_jual" id="harga_jual"
                                    value="{{ $editbu->harga_jual }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Diskon</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="diskon" id="diskon"
                                    value="{{ $editbu->diskon }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-8">
                                <button class="btn btn-primary w-100 m-2" type="submit">Simpan</button>
                                <a href="{{url ('buku')}}" class="btn btn-primary w-100 m-2" type="reset">Kembali</a>
                            </div>
                        </div>
                </form>
                </table>
            </div>
        </div>
    </div>
@endsection