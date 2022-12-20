@extends('layouts.main')

@section('content')
<div class="container p-3 ps-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Prodi</li>
        </ol>
        <h2 class="font-weight-bolder mb-3">Prodi</h2>
    </nav>

    <br>

    <button class="btn btn-dark fs-6 fw-normal" onclick="location.href='#'"><i class="fa-solid fa-square-plus fs-6 me-2 "></i>Tambah</button>

    <div class="card p-4">

        {{-- Tabel Prodi --}}
        <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>PRODI</th>
                    <th>JURUSAN</th>
                    <th>KODE PRODI</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach ( $prodis as $prodi )
                <tr>
                    <td>{{ $loop-> iteration }}</td>
                    <td>{{ $prodi-> nama_prodi }}</td>
                    <td>{{ $prodi-> id_jurusan }}</td>
                    <td>{{ $prodi-> kode_prodi}}</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- / Tabel Prodi --}}

        {{-- Modal Hapus--}}
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
        {{-- / Modal Hapus--}}
    </div>
</div>

@include('partial.footer')
@endsection