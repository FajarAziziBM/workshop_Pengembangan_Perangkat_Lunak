@extends('layouts.main')

@section('content')
<div class="container p-3 ps-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Approve</li>
        </ol>
        <h2 class="font-weight-bolder mb-3 mt-3">Approve Surat</h2>
    </nav>


    <div class="card p-4">
        <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>JENIS SURAT</th>
                    <th>TGL PERMOHONAN</th>
                    <th>FORM PERMOHONAN</th>
                    <th>STATUS SURAT</th>
                    <th>TGL SELESAI</th>
                    <th>APPROVE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Putri Nurul Izza</td>
                    <td>Surat Keterangan Aktif</td>
                    <td>23/10/2022</td>
                    <td>putri.pdf</td>
                    <td>Pending</td>
                    <td></td>
                    <td class="">
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
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
    </div>
</div>

@include('partial.footer')
@endsection