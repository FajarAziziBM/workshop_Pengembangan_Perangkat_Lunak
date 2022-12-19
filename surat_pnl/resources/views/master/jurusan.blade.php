@extends('layouts.main')

@section('content')
<div class="container-fluid py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Jurusan</li>
        </ol>
        <h2 class="font-weight-bolder mb-3">Jurusan</h2>
    </nav>

    <h3 class="main-title mt-2 fw-bold mt-6 ms-5">Data Jurusan</h3>

    <div class="row mt-3">
        <div class="col ms-4">
            <div class="card mt-2">
                <div class="card-body">
                    {{-- Tabel Jurusan --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jurusan</th>
                                <th>Kode Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Teknologi Informasi Dan Komputer</td>
                                <td>TIK</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Teknik Elektro</td>
                                <td>TE</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Teknik Sipil</td>
                                <td>TS</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Teknik Kimia</td>
                                <td>TK</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Teknik Mesin</td>
                                <td>TM</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tata Niaga</td>
                                <td>TN</td>
                                <td>
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- / Tabel Jurusan --}}

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
        </div>
    </div>


</div>
@endsection