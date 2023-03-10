@extends('layouts.app') @section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">
                Barang Masuk
            </li>
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
                        <th>Harga</th>
                        <th>Status</th>
                        @role('ketua')
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
                        <td>Rp. {{$permintaan->total}}</td>
                        <td>
                            In
                        </td>
                        <td class="d-flex"> 
                            <form
                                class="mr-2"
                                action="{{route('transaksi.store', $permintaan->id)}}"
                                method="post"
                            >
                                @csrf @method('POST')
                                <button
                                    type="submit"
                                    class="btn btn-outline-info"
                                >
                                    Setujui
                                </button>
                            </form>
                            <form
                                action="{{route('transaksi.destroy', $permintaan->id) }}"
                                method="post"
                            >
                                @csrf @method('DELETE')
                                <button
                                    type="submit"
                                    class="btn btn-outline-danger"
                                >
                                    Tolak
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
