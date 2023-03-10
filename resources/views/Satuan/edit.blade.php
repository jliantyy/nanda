@extends('layouts.app') @section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">
                Edit Satuan
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form
                        action="{{route('satuan.update', $satuan->id)}}"
                        method="post"
                    >
                        @csrf @method('PATCH')
                        <div class="form-group">
                            <label for="nama">Nama Satuan</label>
                            <input
                                type="text"
                                name="nama"
                                id="nama"
                                value="{{old('nama', $satuan->nama)}}"
                                class="form-control"
                            />
                        </div>
                        <button class="btn btn-outline-warning btn-sm">
                            Perbarui Satuan
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
                                <th>Kode Satuan</th>
                                <th>Nama Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$satuan->no_reg}}</td>
                                <td>{{$satuan->nama}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
