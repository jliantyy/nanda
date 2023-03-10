@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold">Master Data</p>
        <p style="margin-left: 5px">/ Edit Katagori</p>
    </div>
    <div class="row">
        @role('ketua')
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('katagori.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama-brand">Nama Katagori</label>
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
                            Perbarui Katagori
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
                            <th scope="col">Kode Katagori</th>
                            <th scope="col">Nama Katagori</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($katagoris as $katagori)
                        <tr>
                            <td>{{$katagori->no_reg}}</td>
                            <td>{{$katagori->nama}}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf @method('GET')
                                    <a
                                        href="{{route('katagori.edit', $katagori->id )}}"
                                        class="btn btn-outline-warning btn-sm"
                                        >Edit Katagori</a
                                    >
                                    <a
                                        href="./katagori/destroy/{{ $katagori->id }}"
                                        class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                                        >Hapus Katagori</a
                                    >
                                </form>
                            </td>
                        </tr>
                        @empty @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endrole @role('anggota')
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Katagori</th>
                                <th>Nama Katagori</th>
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
