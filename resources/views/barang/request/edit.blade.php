@extends('layouts.app') @section('content')
<div class="container">
    <ol class="breadcrumb bg-transparent d-flex align-items-center">
        <li class="breadcrumb-item" aria-current="page">Master Barang</li>
        <li class="breadcrumb-item active" aria-current="page">
            Add Barang Baru
        </li>
    </ol>
    <div class="card border-0">
        <div class="card-body">
            <form
                action="{{route('barang.store.permintaan', $permintaan->id)}}"
                method="post"
            >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input
                                type="text"
                                value="{{$permintaan->nama}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Katagori</label>
                            <input
                                type="text"
                                value="{{$permintaan->katagori->nor_reg}} - {{$permintaan->katagori->nama}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Brand</label>
                            <input
                                type="text"
                                value="{{$permintaan->brand->nor_reg}} - {{$permintaan->brand->nama}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Satuan</label>
                            <input
                                type="text"
                                value="{{$permintaan->satuan->nor_reg}} - {{$permintaan->satuan->nama}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Kode dan nama Barang</label>
                            <input
                                type="text"
                                value="{{$permintaan->nor_reg}} - {{$permintaan->nama}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input
                                type="text"
                                name="total"
                                value="{{$permintaan->harga}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">quantity</label>
                            <input
                                type="text"
                                name="jumlah"
                                value="{{$permintaan->quantity}}"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="ml-3">
                        <button class="btn btn-outline-info">
                            Simpan Stock
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
