@extends('layouts.main')

@section('content')
<div class="container p-3 ps-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Akun</li>
        </ol>
        <h2 class="font-weight-bolder mt-3 mb-3">Profile</h2>
    </nav>
    <div class="card p-4 w-50">
        <form action="">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="name" class="form-control border ps-3" id="name" aria-describedby="name" placeholder="Putri Nurul Izza" autofocus disabled>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control border ps-3 pe-3" id="nim" placeholder="2020573010053" disabled>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control border ps-3" id="prodi" placeholder="Teknik Informatika" disabled>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control border ps-3" id="jurusan" placeholder="Teknologi Informasi dan Komputer" dir="">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control border ps-3" id="password" placeholder="••••••" disabled>
            </div>
            <button type="submit" class="btn btn-primary float-end ms-2">Reset Password</button>
        </form>
    </div>
</div>
@endsection