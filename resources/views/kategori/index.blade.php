@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
        </ol>
    </nav>
    @role('gudang')
    <div class="row">
        <div class="col-md-5">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('kategori.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Simpan Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categorys as $category)
                                <tr>
                                    <td>{{$category->no_reg}}</td>
                                    <td>{{$category->nama}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('GET')
                                            <a href="{{route('kategori.edit', $category->id)}}"  class="btn btn-outline-warning btn-sm">Edit Kategori</a>
                                            <a href="{{route('kategori.destroy', $category->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus Kategori</a>
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
    @endrole

    @role('pimpinan')
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$category->no_reg}}</td>
                                    <td>{{$category->nama}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endrole
</div>

@endsection