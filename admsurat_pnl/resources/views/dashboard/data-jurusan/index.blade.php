@extends('dashboard.layouts.main')
@section('page-heading', 'Data Jurusan')

@section('content')
<div class="mt-3">
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="fa-solid fa-square-plus me-1"></i>
        Tambah
    </button>
</div>

<div class="row">
    <div class="col">
        <div class="card mt-2">
            <div class="card-body">
                {{-- Tabel List Jurusan --}}
                <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE JURUSAN</th>
                            <th>JURUSAN</th>
                            <th>KA. JURUSAN</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusans as $jurusan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jurusan->kode_jurusan }}</td>
                            <td>{{ $jurusan->nama_jurusan }}</td>
                            <td>
                                @php

                                @endphp
                            </td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-sm btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Modal Edit Jurusan --}}
                        <x-form_modal>
                            @slot('id', 'modalEdit')
                            @slot('title', 'Edit Jurusan')
                            @slot('route', route('data-approvesior.update', $jurusan->id))
                            @slot('method') @method('put') @endslot
                            @slot('btnTitle', 'Perbarui')
                            <div class="mb-3">
                                <label for="kodejurusan" class="form-label">Kode Jurusan</label>
                                <input type="name" class="form-control @error('kodejurusan') is-invalid @enderror" id="kodejurusan" name="kodejurusan" value="{{ old('kodejurusan', $jurusan->kode_jurusan) }}" autofocus required>
                                @error('kodejurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namajurusan" class="form-label">Nama Jurusan</label>
                                <input type="text" class="form-control @error('namajurusan') is-invalid @enderror" id="namajurusan" name="namajurusan" value="{{ old('namajurusan', $jurusan->nama_jurusan) }}" autofocus required>
                                @error('namajurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kajurusan" class="form-label">KA. Jurusan</label>
                                <input type="text" class="form-control @error('kajurusan') is-invalid @enderror" id="kajurusan" name="kajurusan" value="{{ old('kajurusan', $approvesior->jabatan) }}" autofocus required>
                                @error('kajurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </x-form_modal>
                        {{-- / Modal Edit Jurusan --}}

                        {{-- Modal Hapus Jurusan --}}
                        <x-form_modal>
                            @slot('id', "modalHapus$loop->iteration")
                            @slot('title', 'Hapus Data User')
                            @slot('route', route('data-approvesior.destroy', $jurusan->id))
                            @slot('method') @method('delete') @endslot
                            @slot('btnPrimaryClass', 'btn-outline-danger')
                            @slot('btnSecondaryClass', 'btn-secondary')
                            @slot('btnPrimaryTitle', 'Hapus')

                            <p class="fs-5">Apakah anda yakin akan menghapus data jurusan
                                <b>{{ $jurusan->nama_jurusan }}</b>?
                            </p>

                        </x-form_modal>

                        {{-- / Modal Hapus Jurusan --}}

                        {{-- @endforeach --}}
                    </tbody>
                </table>
                {{-- / Tabel List Jurusan --}}
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Jurusan -->
<x-form_modal>
    @slot('id', 'modalTambah')
    @slot('title', 'Tambah Jurusan')
    @slot('route', route('data-approvesior.store'))

    <div class="mb-3">
        <label for="kodejurusan" class="form-label">Kode Jurusan</label>
        <input type="name" class="form-control @error('kodejurusan') is-invalid @enderror" id="kodejurusan" name="kodejurusan" autofocus required>
        @error('kodejurusan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="namajurusan" class="form-label">Nama Jurusan</label>
        <input type="text" class="form-control @error('namajurusan') is-invalid @enderror" id="namajurusan" name="namajurusan" autofocus required>
        @error('namajurusan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="kajurusan" class="form-label">KA. Jurusan</label>
        <input type="text" class="form-control @error('kajurusan') is-invalid @enderror" id="kajurusan" name="kajurusan" autofocus required>
        @error('kajurusan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

</x-form_modal>
<!-- Akhir Modal Tambah Jurusan -->

@endsection