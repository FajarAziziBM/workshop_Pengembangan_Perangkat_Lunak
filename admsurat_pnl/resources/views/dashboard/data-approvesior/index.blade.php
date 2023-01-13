@extends('dashboard.layouts.main')
@section('page-heading', 'Data Approvesior')

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
                {{-- Tabel List Approvesior --}}
                <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>NIP</th>
                            <th>JABATAN</th>
                            <th>ALAMAT</th>
                            <th>NO. HP</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($approvesiors as $approvesior)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $approvesior->nama }}</td>
                            <td>{{ $approvesior->NIP }}</td>
                            <td>{{ $approvesior->jabatan }}</td>
                            <td>{{ $approvesior->alamat }}</td>
                            <td>{{ $approvesior->no_hp }}</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-sm btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Modal Edit Approvesior --}}
                        <x-form_modal>

                            @slot('id', "modalEdit$loop->iteration")
                            @slot('title', 'Edit Data Approvesior')
                            @slot('route', route('data-approvesior.update', $approvesior->id))
                            @slot('method') @method('put') @endslot
                            @slot('btnTitle', 'Perbarui')

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="name" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $approvesior->nama) }}" autofocus required>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $approvesior->NIP) }}" autofocus required>
                                @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan', $approvesior->jabatan) }}" autofocus required>
                                @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $approvesior->alamat) }}" autofocus required>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp', $approvesior->no_hp) }}" autofocus required>
                                @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </x-form_modal>
                        {{-- / Modal Edit Approvesior --}}

                        {{-- Modal Hapus Approvesior --}}
                        <x-form_modal>
                            @slot('id', "modalHapus$loop->iteration")
                            @slot('title', 'Hapus Data Approvesior')
                            @slot('route', route('data-jurusan.destroy', $approvesior->id))
                            @slot('method') @method('delete') @endslot
                            @slot('btnPrimaryClass', 'btn-outline-danger')
                            @slot('btnSecondaryClass', 'btn-secondary')
                            @slot('btnPrimaryTitle', 'Hapus')

                            <p class="fs-5">Apakah anda yakin akan menghapus data approvesior
                                <b>{{ $approvesior->nama }}</b>?
                            </p>

                        </x-form_modal>
                        {{-- / Modal Hapus Approvesior --}}

                    </tbody>
                </table>
                {{-- / Tabel List Approvesior --}}
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Approvesior -->
<x-form_modal>
    @slot('id', 'modalTambah')
    @slot('title', 'Tambah Approvesior')
    @slot('route', route('data-approvesior.store'))

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="name" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus required>
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" autofocus required>
        @error('nip')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" autofocus required>
        @error('jabatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" autofocus required>
        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" autofocus required>
        @error('no_hp')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

</x-form_modal>
<!-- / Modal Tambah Approvesior -->

@endsection