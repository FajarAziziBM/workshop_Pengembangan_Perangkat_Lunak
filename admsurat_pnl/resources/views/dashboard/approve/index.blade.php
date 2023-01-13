@extends('dashboard.layouts.main')
@section('page-heading', 'Approve Surat')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-body">
                    {{-- Tabel List Approve Surat Masuk --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>JENIS SURAT</th>
                                <th>TGL PENGAJUAN</th>
                                <th>FORM PERMOHONAN</th>
                                <th>STATUS SURAT</th>
                                <th>TGL SELESAI</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Putri Nurul Izza</td>
                                <td>Surat Ket. Cuti</td>
                                <td>12/08/2023</td>
                                <td>putri.pdf</td>
                                <td>Pending</td>
                                <td>-</td>
                                <td class="d-flex">
                                    <button type="button" class="btn btn-sm btn-primary ms-2" data-bs-toggle="modal"
                                        data-bs-target="#modalApprove">
                                        <i class="fa-solid fa-check-to-slot"></i>
                                    </button>
                                </td>
                            </tr>

                            {{-- Modal Approve Surat --}}
                            <x-form_modal>
                                @slot('id', 'modalApprove')
                                <!-- ganti dengan ini kalo udah ada backend "modalHapus$loop->iteration" -->
                                @slot('title', 'Approve Pengajuan Surat Mahasiswa')
                                {{-- @slot('route', route('transaction.destroy', $transaction->id)) <!-- dihilangkan komentar jika sudah ada routenya --> --}}
                                @slot('btnPrimaryClass', 'btn-primary')
                                @slot('btnSecondaryClass', 'btn-secondary')
                                @slot('btnPrimaryTitle', 'Approve')

                                <p class="fs-5">Apakah anda yakin akan menerima pengajuan pembuatan surat dari mahasiswa
                                    nama?
                                </p>
                            </x-form_modal>
                            {{-- / Modal Approve Surat --}}

                        </tbody>
                    </table>
                    {{-- / Tabel List Approve Surat Masuk --}}
                </div>
            </div>
        </div>
    </div>

@endsection
