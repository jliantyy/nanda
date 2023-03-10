@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">
                Barang Keluar
            </li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Refrensi</th>
                        <th>Supplier</th>
                        <th>Jumlah permintaan</th>
                        <th>Tanggal</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permintaans as $permintaan)
                    <tr>
                        <td>{{$permintaan->kode_permintaan}}</td>
                        <td>{{$permintaan->barang->brand->nama}}</td>
                        <td>{{$permintaan->jumlah}}</td>
                        <td>{{$permintaan->created_at}}</td>
                        <td>Rp. {{$permintaan->total}}</td>
                        @role('ketua') 
                        @if ($permintaan->status == 0)
                        <td class="d-flex">
                            <form action="" method="post">
                                @csrf
                                <button class="btn btn-outline-info btn-sm">
                                    Setujui
                                </button>
                            </form>
                            <form action="" method="post">
                                @csrf
                                <button
                                    class="btn btn-outline-danger btn-sm ml-2"
                                >
                                    Tolak
                                </button>
                            </form>
                        </td>
                        @endif @endrole
                    </tr>
                    @empty @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
