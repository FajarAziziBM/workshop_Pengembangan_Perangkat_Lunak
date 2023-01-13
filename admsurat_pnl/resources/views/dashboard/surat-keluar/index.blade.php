@extends('dashboard.layouts.main')
@section('page-heading', 'Surat Keluar')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    {{-- Tabel List Surat Keluar --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        width="100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>NIM</th>
                                <th>PRODI</th>
                                <th>JURUSAN</th>
                                <th>JENIS SURAT</th>
                                <th>FORM PERMOHONAN</th>
                                <th>FILE SURAT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Putri Nurul Izza</td>
                                <td>2020573010053</td>
                                <td>TI</td>
                                <td>TIK</td>
                                <td>Surat Ket. Cuti</td>
                                <td>Putri.pdf</td>
                                <td>putri.pdf</td>
                                <td class="d-flex">
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#modalView">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success ms-2" data-bs-toggle="modal"
                                        data-bs-target="#modalCetak">
                                        <i class="fa-solid fa-print"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-warning ms-2" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal"
                                        data-bs-target="#modalHapus">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            {{-- Modal View Surat --}}

                            {{-- / Modal View Surat --}}

                            {{-- Modal Edit Surat --}}
                            <x-form_modal>
                                @slot('id', 'modalEdit')
                                @slot('title', 'Edit Surat')
                                {{-- @slot('route', route('transaction.update', $transaction->id)) <!-- dihilangkan komentar jika sudah ada routenya --> --}}
                                @slot('method') @method('put') @endslot

                                <div class="mb-3">
                                    <label for="jenistransaksi" class="form-label">Jenis Transaksi</label>
                                    <input class="form-control" type="text" placeholder=""
                                        aria-label="Disabled input example">
                                </div>
                            </x-form_modal>
                            {{-- / Modal Edit Surat --}}

                            {{-- Modal Hapus Surat --}}
                            <x-form_modal>
                                @slot('id', 'modalHapus')
                                <!-- ganti dengan ini kalo udah ada backend "modalHapus$loop->iteration" -->
                                @slot('title', 'Hapus Data Surat')
                                {{-- @slot('route', route('transaction.destroy', $transaction->id)) <!-- dihilangkan komentar jika sudah ada routenya --> --}}
                                @slot('method') @method('delete') @endslot
                                @slot('btnPrimaryClass', 'btn-outline-danger')
                                @slot('btnSecondaryClass', 'btn-secondary')
                                @slot('btnPrimaryTitle', 'Hapus')

                                <p class="fs-5">Apakah anda yakin akan menghapus data surat ini?</p>
                            </x-form_modal>
                            {{-- / Modal Hapus Surat --}}

                        </tbody>
                    </table>
                    {{-- / Tabel List Surat Masuk --}}
                </div>
            </div>
        </div>
    </div>

@endsection
