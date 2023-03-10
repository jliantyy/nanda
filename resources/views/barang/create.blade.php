@extends('layouts.app') @section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">
                Add Barang Baru
            </li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <form
                action="{{route('barang.store',$katagoris->id)}}"
                method="post"
            >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input
                                type="text"
                                name="nama"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Brand</label>
                            <select name="brand_id" id="" class="form-control">
                                @foreach ($brands as $brands)
                                <option value="">Pilih Brand</option>
                                <option value="{{$brands->id}}">
                                    {{$brands->no_reg}} - {{$brands->nama}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">UOM</label>
                            <select name="satuan_id" id="" class="form-control">
                                @foreach ($satuans as $uom)
                                <option value="">Pilih Satuan</option>
                                <option value="{{$uom->id}}">
                                    {{$uom->no_reg}} - {{$uom->nama}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input
                                type="text"
                                name="harga"
                                id=""
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Jumlah Stock</label>
                            <input
                                type="text"
                                name="quantity"
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
