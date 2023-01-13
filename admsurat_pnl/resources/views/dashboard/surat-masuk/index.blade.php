@extends('dashboard.layouts.main')
@section('page-heading', 'Surat Masuk')

@section('content')
    <div class="mt-3">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahSurat">
            <i class="fa-solid fa-square-plus me-1"></i>
            Pengajuan Surat
        </button>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-body">
                    {{-- Tabel List Surat Masuk --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        width="100%">
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
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
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
                                    <button type="button" class="btn btn-sm btn-primary ms-2" data-bs-toggle="modal"
                                        data-bs-target="#modalProgress">
                                        <i class="fa-solid fa-list-check"></i>
                                    </button>
                                </td>
                            </tr>

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

                            {{-- Modal Progress Surat --}}
                            <x-form_modal>
                                @slot('id', 'modalProgress')
                                @slot('title', 'Progress Surat')
                                {{-- @slot('route', route('transaction.update', $transaction->id)) <!-- dihilangkan komentar jika sudah ada routenya --> --}}
                                @slot('btnSecondaryClass', 'btn-primary')
                                @slot('btnSecondaryTitle', 'Tutup')

                                <div class="mb-3">
                                    <label for="jenistransaksi" class="form-label">Jenis Transaksi</label>
                                    <input class="form-control" type="text" placeholder=""
                                        aria-label="Disabled input example">
                                </div>
                            </x-form_modal>
                            {{-- / Modal Progress Surat --}}

                        </tbody>
                    </table>
                    {{-- / Tabel List Surat Masuk --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Surat -->
    <x-form_modal>
        @slot('id', 'tambahSurat')
        @slot('title', 'Tambah Surat')
        @slot('btnPrimaryTitle', 'Tambah')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="name" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                autofocus required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                autofocus required>
            @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi"
                autofocus required>
            @error('prodi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
                {{-- @foreach ($rekenings as $rekening)
                    @if (old('jurusan') == $rekening->id)
                        <option value="{{ $rekening->id }}" selected>
                            {{ "$rekening->no_rekening - $rekening->atas_nama" }}
                        </option>
                    @else
                        <option value="{{ $rekening->id }}">
                            {{ "$rekening->no_rekening - $rekening->atas_nama" }}
                        </option>
                    @endif
                @endforeach --}}
            </select>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Upload File Form Permohonan</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file"
                autofocus required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </x-form_modal>
    <!-- Akhir Modal Tambah Surat -->

@endsection
