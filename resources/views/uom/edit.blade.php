@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Satuan</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('satuan.update', $satuan->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nama">Nama Satuan</label>
                    <input type="nama" name="nama" id="" value="{{old('nama', $satuan->nama)}}" class="form-control">
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