@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>

        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Request Barang akan masuk kedalam table dibawah ini
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Refrensi</th>
                        <th>Supplier</th>
                        <th>Jumlah permintaan</th>
                        <th>Tanggal</th>
                        @role('gudang')
                            <th>Options</th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permintaans as $permintaan)
                        <tr>
                            <td>{{$permintaan->kode_permintaan}}</td>
                            <td>{{$permintaan->barang->brand->nama}}</td>
                            <td>{{$permintaan->jumlah}}</td>
                            <td>{{$permintaan->created_at}}</td>
                            @role('gudang')
                                @if ($permintaan->status == 'in')
                                    <td class="d-flex">
                                        <form action="" method="">
                                            @csrf
                                            @method('POST')
                                            <a href="{{route('transaksi.store', $permintaan->id)}}" class="btn btn-outline-info btn-sm">Setujui</a>
                                        </form>
                                        <form action="" method="post">
                                            @csrf
                                            @method('GET')
                                            <a href="{{route('transaksi.destroy', $permintaan->id)}}" class="btn btn-outline-danger btn-sm ml-2">Tolak</a>
                                        </form>
                                    </td>
                                @endif
                            @endrole
                        </tr>
                    @empty

                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
