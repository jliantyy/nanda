@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th scope="col">Kode Categorys</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Options</th>
                </thead>
                <tbody>
                    @forelse ($cupboards as $cupboard)
                    <tr>
                        <td>{{$cupboard->no_reg}}</td>
                        <td>{{$cupboard->nama}}</td>
                        <td>
                            <form action="" method="post">
                                @csrf @role('ketua')
                                <a
                                    href="{{route('barang.create', $cupboard->id )}}"
                                    class="btn btn-outline-secondary btn-sm"
                                >
                                    update stock
                                </a>
                                <a
                                    href="{{route('rak.barang', $cupboard->id )}}"
                                    class="btn btn-outline-secondary btn-sm"
                                >
                                    Tampilkan Stock
                                </a>
                                @endrole @role('customer')
                                <a
                                    href="{{route('rak.barang', $cupboard->id )}}"
                                    class="btn btn-outline-warning btn-sm"
                                >
                                    Buat Permintaan
                                </a>
                                @endrole
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
