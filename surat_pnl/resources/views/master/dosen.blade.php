@extends('layouts.main')

@section('content')
<div class="container-fluid py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pengguna</li>
        </ol>
        <h2 class="font-weight-bolder mb-3">Pengguna</h2>
    </nav>

    <ul class="nav nav-tabs mt-7 ms-4">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dosen') ? 'active fw-semibold' : '' }} fs-4" aria-current="page" href="/master-data/dosen">Dosen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('mahasiswa') ? 'active fw-semibold' : '' }} fs-4" href="/master-data/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('mahasiswa') ? 'active fw-semibold' : '' }} fs-4" href="/master-data/approvesior">Approvesior</a>
        </li>
    </ul>

    <h3 class="main-title mt-2 fw-bold mt-6 ms-5">Data Dosen</h3>

    <div class="row mt-3">
        <div class="col ms-4">
            <div class="card mt-2">
                <div class="card-body">
                    {{-- Tabel Dosen --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- / Tabel Dosen --}}

                    {{-- Modal Hapus --}}
                    <div class="modal" id="hapus" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda Yakin Untuk Menghapus Data Ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- / Modal Hapus --}}
                </div>
            </div>
        </div>
    </div>


</div>
@endsection