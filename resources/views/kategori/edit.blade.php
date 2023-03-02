@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>

        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Perbarui Kategori</button>
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
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KTG/20220403/001</td>
                                <td>Makanan Kemasan</td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <a href="{{route('kategori')}}"  class="btn btn-outline-warning btn-sm">Kateogry</a>
                                        <button type="submit" class="btn btn-outline-dan)}}" class="btn btn-outline-warning btn-sm">Edit
                                            Kategori</a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Hapus
                                            Kategori</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection