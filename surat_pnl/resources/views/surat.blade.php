@extends('layouts.main')

@section('content')
    <div class="container p-3 ps-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Surat</li>
            </ol>
            <h2 class="font-weight-bolder mb-0">Surat</h2>
        </nav>
        <p class="text-muted">Welcome back, bella!</p>
        <button class="btn btn-dark fs-6 fw-normal" onclick="location.href='/form-surat'"><i
                class="fa-solid fa-square-plus fs-6 me-2 "></i>Tambah</button>
        <div class="card p-4">
            <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Req</th>
                        <th>Tanggal Selesai</th>
                        <th>Status Surat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Surat Aktif</td>
                        <td>23/10/2022</td>
                        <td>23/10/2022</td>
                        <td>Pending</td>
                        <td class="">
                            <button class="btn btn-success mt-3"><i class="fa-solid fa-envelope-open-text "></i></button>
                            <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                            <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                            <button class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#progres"><i class="fa-solid fa-list-check "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Surat Aktif</td>
                        <td>23/10/2022</td>
                        <td>23/10/2022</td>
                        <td>Pending</td>
                        <td class="">
                            <button class="btn btn-success mt-3"><i class="fa-solid fa-envelope-open-text "></i></button>
                            <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                            <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                            <button class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#progres"><i class="fa-solid fa-list-check "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Surat Aktif</td>
                        <td>23/10/2022</td>
                        <td>23/10/2022</td>
                        <td>Pending</td>
                        <td class="">
                            <button class="btn btn-success mt-3"><i class="fa-solid fa-envelope-open-text "></i></button>
                            <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                            <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                            <button class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#progres"><i class="fa-solid fa-list-check "></i></button>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>

            <div class="modal" id="hapus" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda Yakin Untuk Menghapus Data Ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="progres" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Progres Surat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                  <h6>Surat </h6>
                                  <p class="text-sm">
                                     Linimasa Surat
                                  </p>
                                </div>
                                <div class="card-body p-3">
                                  <div class="timeline timeline-one-side">
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-success text-gradient">person</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Akademik</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-danger text-gradient">person</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Wadir 1</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-info text-gradient">person</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Tata Usaha</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-warning text-gradient">person</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Jurusan</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-primary text-gradient">person</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Prodi</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block">
                                      <span class="timeline-step">
                                        <i class="material-icons text-dark text-gradient">person</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Dospem</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
