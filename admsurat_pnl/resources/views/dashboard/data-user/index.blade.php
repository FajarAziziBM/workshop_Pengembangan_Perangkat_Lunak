@extends('dashboard.layouts.main')
@section('page-heading', 'Data User')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="mt-3">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="fa-solid fa-square-plus me-1"></i>
            Tambah
        </button>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="card mt-2">
                <div class="card-body">

                    {{-- Tabel Data User --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>ROLE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>a</td>
                                <td>a</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEditUser">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalHapusUser">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        @php
                                            if ($user->is_admin) {
                                                $is_admin = 'Admin';
                                            } else {
                                                $is_admin = 'Karyawan';
                                            }
                                        @endphp
                                        {{ $is_admin }}
                                    </td>
                                    <td>
                                        @php
                                            if ($user->is_active) {
                                                $bg = 'text-bg-success';
                                                $is_active = 'Aktif';
                                            } else {
                                                $bg = 'text-bg-danger';
                                                $is_active = 'Non-Aktif';
                                            }
                                        @endphp
                                        <span class="badge {{ $bg }}">{{ $is_active }}</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEditUser{{ $loop->iteration }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusUser{{ $loop->iteration }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>  --}}

                            {{-- Modal Edit User --}}
                            {{-- <x-form_modal>
                                    @slot('id', 'modalEditUser')
                                    @slot('title', 'Edit Data User')
                                    @slot('route', route('users.update', $user->id))
                                    @slot('method') @method('put') @endslot
                                    @slot('btnTitle', 'Perbarui')

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="name" class="form-control @error('nama') is-invalid @enderror"
                                            id="nama" name="nama" value="{{ old('nama', $user->nama) }}" autofocus
                                            required>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email', $user->email) }}"
                                            autofocus required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" value="{{ old('username', $user->username) }}"
                                            autofocus required>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="rekening" class="form-label">Rekening</label>
                                        <select class="form-select" id="rekening" name="id_rekening">
                                            @foreach ($rekenings as $rekening)
                                                @if (old('id_rekening', $user->id_rekening) == $rekening->id)
                                                    <option value="{{ $rekening->id }}" selected>
                                                        {{ "$rekening->no_rekening - $rekening->atas_nama" }}
                                                    </option>
                                                @else
                                                    <option value="{{ $rekening->id }}">
                                                        {{ "$rekening->no_rekening - $rekening->atas_nama" }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="is_admin" class="form-label">Role</label>
                                        <select class="form-select" id="is_admin" name="is_admin">
                                            @foreach ([1 => 'Admin', 0 => 'Karyawan'] as $bool => $role)
                                                <option value="{{ $bool }}"
                                                    {{ old('role', $user->role) == $bool ? 'selected' : '' }}>
                                                    {{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="is_active" class="form-label">Status</label>
                                        <select class="form-select" id="is_active" name="is_active">
                                            @foreach ([1 => 'Aktif', 0 => 'Nonaktif'] as $bool => $status)
                                                <option value="{{ $bool }}"
                                                    {{ old('status', $user->status) == $bool ? 'selected' : '' }}>
                                                    {{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </x-form_modal> --}}
                            {{-- / Modal Edit User

                            {{-- Modal Hapus User --}}
                            {{-- <x-form_modal>
                                    @slot('id', "modalHapusUser$loop->iteration")
                                    @slot('title', 'Hapus Data User')
                                    @slot('route', route('users.destroy', $user->id))
                                    @slot('method') @method('delete') @endslot
                                    @slot('btnPrimaryClass', 'btn-outline-danger')
                                    @slot('btnSecondaryClass', 'btn-secondary')
                                    @slot('btnPrimaryTitle', 'Hapus')

                                    <p class="fs-5">Apakah anda yakin akan menghapus data user
                                        <b>{{ $user->nama }}</b>?
                                    </p>

                                </x-form_modal> --}}
                            {{-- / Modal Hapus User 
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                    {{-- / Tabel Data User --}}
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Tambah User -->
    <x-form_modal>
        @slot('id', 'modalTambah')
        @slot('title', 'Tambah Data User')
        @slot('overflow', 'overflow-auto')
        {{-- @slot('route', route('users.store')) --}}

        <div class="row">
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
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" autofocus required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" autofocus required>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" autofocus required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="is_admin" class="form-label">Role</label>
                <select class="form-select" id="is_admin" name="is_admin">
                    <option value="1" selected>Admin</option>
                    <option value="0">Karyawan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="is_active" class="form-label">Status</label>
                <select class="form-select" id="is_active" name="is_active">
                    <option value="1" selected>Aktif</option>
                    <option value="0">Non-Aktif</option>
                </select>
            </div>
        </div>
    </x-form_modal>
    <!-- Akhir Modal Tambah User -->
@endsection
