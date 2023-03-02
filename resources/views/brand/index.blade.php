@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Brand</p>
    </div>
    <div class="row">
        @role('gudang')
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('brand.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Brand</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Simpan Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Brand</th>
                                <th>Nama Brand</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{$brand->no_reg}}</td>
                                    <td>{{$brand->nama}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            <a href="{{route('brand.edit')}}" class="btn btn-outline-warning btn-sm">Edit Brand</a>
                                            <button class="submit btn btn-outline-danger btn-sm">Hapus</button>
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
        @endrole
        @role('pimpinan')
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Brand</th>
                                    <th>Nama Brand</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BRND/20220403/001</td>
                                    <td>Kawasaki</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endrole
    </div>

</div>

@endsection