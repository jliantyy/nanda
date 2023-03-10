@extends('layouts.app') @section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">
                Edit Kategori
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form
                        action="{{route('katagori.update', $katagori->id)}}"
                        method="post"
                    >
                        @csrf @method('PATCH')
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input
                                type="text"
                                name="nama"
                                id="nama"
                                value="{{old('nama', $katagori->nama)}}"
                                class="form-control"
                            />
                        </div>
                        <button class="btn btn-outline-warning btn-sm">
                            Perbarui Category
                        </button>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$katagori->no_reg}}</td>
                                <td>{{$katagori->nama}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
