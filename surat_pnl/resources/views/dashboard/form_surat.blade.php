@extends('layouts.main')

@section('content')
    <div class="container p-3 ps-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Form Surat</li>
            </ol>
            <h2 class="font-weight-bolder mb-0">Form Surat</h2>
        </nav>
        <button class="btn btn-dark fs-6 fw-normal mt-3" onclick="location.href='/surat'"><i class="fa-solid fa-chevron-left fs-6 me-2 "></i>Kembali</button>
        <div class="card p-4 w-50">
            <form action="">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="name" class="form-control border ps-3" id="name" aria-describedby="name" autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control border ps-3 pe-3" id="nim">
                  </div>
                  <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" class="form-control border ps-3" id="prodi">
                  </div>
                  <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control border ps-3" id="jurusan">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alasan Membuat Surat</label>
                    <select class="form-select p-2" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="administrasi">Administrasi</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Upload KHS</label>
                    <input class="form-control border p-2" type="file" id="formFile">
                  </div>

                  <button type="submit" class="btn btn-primary float-end">Kirim</button>
            </form>
        </div>
    </div>
@endsection
