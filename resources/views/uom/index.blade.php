@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Satuan</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('uom.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Satuan</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <button class="btn btn-outline-info">Simpan Satuan</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Satuan</th>
                                <th>Nama</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($satuans as $satuan)
                                <tr>
                                    <td>{{$satuan->no_reg}}</td>
                                    <td>{{$satuan->nama}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('GET')
                                            <a href="{{route('uom.edit',  $satuan->id)}}" class="btn btn-outline-warning btn-sm">Edit Satuan</a>
                                            <a href="{{route('satuan.destroy', $satuan->id)}}" class="btn btn-outline-danger btn-sm">Hapus Satuan</a>
                                        </form>
                                    </td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection