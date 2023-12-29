@extends('layouts.main_index_admin')
@section('main_index')
{{-- content --}}
{{-- <div class="container-fluid py-4">
        <div class="container-fluid py-4">
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#createBuku">
                Tambah Buku
            </button>
            @include('partials.buku.create_buku')
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Table Buku</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Judul Buku</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Penerbit</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Penulis</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Stok Buku</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bukus as $buku)
                                            <tr>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $buku->judul }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $buku->penerbit }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $buku->pengarang }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $buku->stok_buku }}</p>
                                                </td>
                                                <td>
                                                    <form action="{{ route("buku.delete", $buku->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </form>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBuku_{{ $buku->id }}" data-book-id={{ $buku->id }}>
                                                        Edit Buku
                                                    </button>
                                                    @include('partials.buku.edit_buku')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
<div class="container-fluid py-4">
        <div class="container-fluid py-4">
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#createSiswa">
                Tambah Siswa
            </button>
            @include('partials.siswa.create_siswa')
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Table Siswa</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Kelas</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswas as $siswa)
                                            <tr>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $siswa->nama }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $siswa->kelas }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">{{ $siswa->email }}</p>
                                                </td>
                                                <td>
                                                    <form action="{{ route('siswa.delete', $siswa->id) }}" method="POST" class="ml-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger ml-3">Delete</button>
                                                    </form>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSiswa_{{ $siswa->id }}" data-siswa-id={{ $siswa->id }}>
                                                        Edit Siswa
                                                    </button>
                                                    @include('partials.siswa.edit_siswa')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
