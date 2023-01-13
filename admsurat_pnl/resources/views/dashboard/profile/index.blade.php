@extends('dashboard.layouts.main')
@section('page-heading', 'Profile')

@section('content')
<div class="card p-5 w-50 mt-4 ms-3">
    <form action="">
        @csrf

        @foreach ($mahasiswas as $mahasiswa)
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="name" class="form-control border ps-3" id="name" aria-describedby="name" placeholder="{{ $mahasiswa->nama }}" autofocus disabled>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control border ps-3 pe-3" id="nim" placeholder="{{ $mahasiswa->NIM }}" disabled>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control border ps-3" id="prodi" placeholder="{{ $prodi->nama_prodi }}" disabled>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control border ps-3" id="jurusan" placeholder="{{ $jurusan->nama_jurusan}}" disabled>
        </div>

        <button type="submit" class="btn btn-danger float-end ms-2">Ganti Password</button>

        @endforeach
    </form>
</div>
@endsection