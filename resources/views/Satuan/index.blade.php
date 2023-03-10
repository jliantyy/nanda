@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold">Master Data</p>
        <p style="margin-left: 5px">/ Satuan</p>
    </div>
    <div class="row">
        @role('ketua')
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('satuan.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama-brand">Nama Satuan</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id="nama-brand"
                                placeholder=""
                            />
                        </div>
                        <button
                            type="submit"
                            class="btn btn-outline-primary mt-3"
                        >
                            Simpan Satuan
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Kode Satuan</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Options</th>
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
                                    <a
                                        href="{{route('satuan.edit', $satuan->id )}}"
                                        class="btn btn-outline-warning btn-sm"
                                        >Edit Satuan</a
                                    >
                                    <a
                                        href="./satuan/destroy/{{ $satuan->id }}"
                                        class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                                        >Hapus UOM</a
                                    >
                                </form>
                            </td>
                        </tr>
                        @empty @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endrole @role('pimpinan')
        <div class="col-md-12">
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
