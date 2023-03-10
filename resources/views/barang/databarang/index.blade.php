@extends('layouts.app') @section('content')
<div class="container">
    <ol class="breadcrumb bg-transparent d-flex align-items-center">
        <li class="breadcrumb-item" aria-current="page">Rak Barang</li>
        <li class="breadcrumb-item active" aria-current="page">Index</li>
    </ol>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Katagori</th>
                        <th>Kode Brand</th>
                        <th>Kode Satuan</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stock</th>
                        @role('customer')
                        <th>Oprions</th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barangs as $barang)
                    <tr>
                        <td>{{$barang->katagori->no_reg}}</td>
                        <td>{{$barang->brand->no_reg}}</td>
                        <td>{{$barang->satuan->no_reg}}</td>
                        <td>{{$barang->no_reg}}</td>
                        <td>{{$barang->nama}}</td>
                        <td>{{$barang->quantity}}</td>
                        @role('customer')
                        <td>
                            <a
                                href="{{route('barang.request', $barang->id )}}"
                                class="btn btn-outline-warning btn-sm"
                            >
                                Buat Permintaan
                            </a>
                        </td>
                        @endrole
                    </tr>
                    @empty @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
