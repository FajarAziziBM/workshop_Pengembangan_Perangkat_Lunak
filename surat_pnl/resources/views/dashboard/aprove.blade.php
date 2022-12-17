@extends('layouts.main')

@section('content')
<div class="container p-3 ps-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Aprove</li>
        </ol>
        <h2 class="font-weight-bolder mb-3">Aprove</h2>
    </nav>


    <div class="card p-4">
        <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
            style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Akademik</th>
                    <th>Wadir 1</th>
                    <th>Progress</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Surat Aktif</td>
                    <td>23/10/2022</td>
                    <td>23/10/2022</td>
                    <td>Pending</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>Surat Aktif</td>
                    <td>23/10/2022</td>
                    <td>23/10/2022</td>
                    <td>Pending</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Surat Aktif</td>
                    <td>23/10/2022</td>
                    <td>23/10/2022</td>
                    <td>Pending</td>

                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                </tr>
            </tfoot>
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
@endsection
