@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Add Barang Baru</p>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nomor-referensi">Nomor Referensi</label>
                            <input class="form-control" id="nomor-feferensi">
                        </div>

                        <div class="form-group">
                            <label for="katagori">Katagori</label>
                            <select name="katagori" id="katagori" class="form-control">
                                <option value="">Pilih Katagori</option>
                                <option value="a">retri indomaret</option>
                                <option value="b">retri alfamarf</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="uom">UOM</label>
                            <select name="uom" id="uom" class="form-control">
                                <option value="">Pilih UOM</option>
                                <option value="a">a</option>
                                <option value="b">b</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input class="form-control" id="image" type="file">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama-barang">Nama Barang</label>
                            <input class="form-control" id="nama-barang">
                        </div>

                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <select name="brand" id="brand" class="form-control">
                                <option value="">Pilih Brand</option>
                                <option value="a">Kayes</option>
                                <option value="b">Loura</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input class="form-control" id="harga">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input class="form-control" id="status">
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-info">Simpan Stock</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection