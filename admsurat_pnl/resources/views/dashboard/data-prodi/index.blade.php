@extends('dashboard.layouts.main')
@section('page-heading', 'Data Prodi')

@section('content')
<div class="mt-3">
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahSurat">
        <i class="fa-solid fa-square-plus me-1"></i>
        Tambah
    </button>
</div>

<div class="row">
    <div class="col">
        <div class="card mt-2">
            <div class="card-body">
                {{-- Tabel List Prodi --}}
                <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE PRODI</th>
                            <th>JENJANG</th>
                            <th>PRODI</th>
                            <th>KA. PRODI</th>
                            <th>JURUSAN</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ( $prodis as $prodi )
                            <td>{{ $loop-> iteration }}</td>
                            <td>{{ $prodi-> kode_prodi }}</td>
                            <td>{{ $prodi-> jenjang }}</td>
                            <td>{{ $prodi-> nama_prodi}}</td>

                            <td>{{ $approvesior-> jabatan }}</td>

                            <td>{{ $jurusan-> nama_jurusan }}</td>


                            <td class="d-flex">
                                <button type="button" class="btn btn-sm btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Modal Edit Prodi --}}
                        <x-form_modal>
                            @slot('id', 'modalEdit')
                            @slot('title', 'Edit Prodi')
                            {{-- @slot('route', route('transaction.update', $transaction->id)) <!-- dihilangkan komentar jika sudah ada routenya --> --}}
                            @slot('method') @method('put') @endslot

                            <div class="mb-3">
                                <label for="jenistransaksi" class="form-label">Jenis Transaksi</label>
                                <input class="form-control" type="text" placeholder="" aria-label="Disabled input example">
                            </div>
                        </x-form_modal>
                        {{-- / Modal Edit Prodi --}}

                        {{-- Modal Hapus Prodi --}}
                        <x-form_modal>
                            @slot('id', 'modalHapus')
                            <!-- ganti dengan ini kalo udah ada backend "modalHapus$loop->iteration" -->
                            @slot('title', 'Hapus Data Prodi')
                            {{-- @slot('route', route('transaction.destroy', $transaction->id)) <!-- dihilangkan komentar jika sudah ada routenya --> --}}
                            @slot('method') @method('delete') @endslot
                            @slot('btnPrimaryClass', 'btn-outline-danger')
                            @slot('btnSecondaryClass', 'btn-secondary')
                            @slot('btnPrimaryTitle', 'Hapus')

                            <p class="fs-5">Apakah anda yakin akan menghapus data surat ini?</p>
                        </x-form_modal>
                        {{-- / Modal Hapus Prodi --}}
                        @endforeach
                    </tbody>
                </table>
                {{-- / Tabel List Prodi --}}
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Prodi -->
<x-form_modal>
    @slot('id', 'tambahSurat')
    @slot('title', 'Tambah Prodi')
    @slot('btnPrimaryTitle', 'Tambah')

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Prodi</label>
        <input type="name" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus required>
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="jenjang" name="jenjang" autofocus required>
        @error('jenjang')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jenjang" class="form-label">Kode Prodi</label>
        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="jenjang" name="jenjang" autofocus required>
        @error('jenjang')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="Prodi" class="form-label">KA. Jurusan</label>
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
        <label for="Prodi" class="form-label">Jurusan</label>
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
    <!-- <div class="mb-3">
        <label for="file" class="form-label">Upload File Form Permohonan</label>
        <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" autofocus required>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div> -->
</x-form_modal>
<!-- Akhir Modal Tambah Prodi -->

@endsection