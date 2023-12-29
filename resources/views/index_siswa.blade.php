@extends('layouts.main_index')
@section('main_index')
    {{-- content --}}
    <div class="container-fluid py-4">
        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#createSiswa">
            Tambah Siswa
        </button>
        @include('partials.siswa.create_siswa')
        <div class="row">
            <div class="col-12">
                <div class="card m b-4">
                    <div class="card-header pb-0">
                        <h6>Table siswa</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center table-hover">
                                <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kelas</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Password</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  {{-- @foreach ($siswas as $siswa)
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
                                            <p class="text-xs text-secondary mb-0">{{ $siswa->password }}</p>
                                        </td>
                                        <td>
                                            <form action="{{ route("siswa.delete", $siswa->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSiswa_{{ $siswa->id }}" data-siswa-id={{ $siswa->id }}>
                                                Buat Buku
                                            </button>
                                            @include('partials.siswa.edit_siswa')
                                        </td>
                                    </tr>
                                  @endforeach --}}
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
