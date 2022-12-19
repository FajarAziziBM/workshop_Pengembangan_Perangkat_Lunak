@extends('layouts.main')

@section('content')
<div class="container p-3 ps-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Prodi</li>
        </ol>
        <h2 class="font-weight-bolder mb-3">Prodi</h2>
    </nav>

    <br>

    <button class="btn btn-dark fs-6 fw-normal" onclick="location.href='#'"><i class="fa-solid fa-square-plus fs-6 me-2 "></i>Tambah</button>

    <div class="card p-4">

        {{-- Tabel Prodi --}}
        <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>PRODI</th>
                    <th>JURUSAN</th>
                    <th>KODE PRODI</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Teknik Informatika</td>
                    <td>Teknologi Informasi Dan Komputer</td>
                    <td>TI</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Teknologi Rekayasa Komputer Jaringan</td>
                    <td>Teknologi Informasi Dan Komputer</td>
                    <td>TRKJ</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Teknologi Rekayasa Multimedia</td>
                    <td>Teknologi Informasi Dan Komputer</td>
                    <td>TRMM</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Instrumentasi dan Kontrol</td>
                    <td>Teknik Elektro</td>
                    <td>TRIK</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Jaringan Telekomunikasi</td>
                    <td>Teknik Elektro</td>
                    <td>TRJT</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Pembangkit Energi</td>
                    <td>Teknik Elektro</td>
                    <td>TRPE</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Diploma Tiga Teknologi Elektronika</td>
                    <td>Teknik Elektro</td>
                    <td>TTE</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Diploma Tiga Teknologi Listrik</td>
                    <td>Teknik Elektro</td>
                    <td>TTL</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Diploma Tiga Teknologi Telekomunikasi</td>
                    <td>Teknik Elektro</td>
                    <td>TTT</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Sarjana Terapan Teknologi Konstruksi Bangunan Gedung</td>
                    <td>Teknik Sipil</td>
                    <td>TKBG</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Konstruksi Jalan dan Jembatan</td>
                    <td>Teknik Sipil</td>
                    <td>TRKJJ</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Diploma Tiga Teknologi Konstruksi Bangunan Air</td>
                    <td>Teknik Sipil</td>
                    <td>TKBA</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Diploma Tiga Teknologi Konstruksi Jalan dan Jembatan</td>
                    <td>Teknik Sipil</td>
                    <td>TKJJ</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Diploma Dua Jalur Cepat Pengukuran dan Penggambaran Tapak Bangunan Gedung</td>
                    <td>Teknik Sipil</td>
                    <td>PPTBG</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Kimia Industri</td>
                    <td>Teknik Kimia</td>
                    <td>TRKI</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Diploma Tiga Teknologi Kimia</td>
                    <td>Teknik Kimia</td>
                    <td>TKK</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Diploma Tiga Teknologi Pengolahan Minyak dan Gas</td>
                    <td>Teknik Kimia</td>
                    <td>TPMG</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Manufaktur</td>
                    <td>Teknik Mesin</td>
                    <td>TRM</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Sarjana Terapan Teknologi Rekayasa Pengelasan dan Fabrikasi</td>
                    <td>Teknik Mesin</td>
                    <td>TRPF</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Diploma Tiga Teknologi Mesin</td>
                    <td>Teknik Mesin</td>
                    <td>TMM</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Diploma Tiga Teknologi Industri</td>
                    <td>Teknik Mesin</td>
                    <td>TTI</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Sarjana Terapan Akuntansi Lembaga Keuangan Syariah</td>
                    <td>Tata Niaga</td>
                    <td>ALKS</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Sarjana Terapan Manajemen Keuangan Sektor Publik</td>
                    <td>Tata Niaga</td>
                    <td>MKSP</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Diploma Tiga Administrasi Bisnis</td>
                    <td>Tata Niaga</td>
                    <td>ADM</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Diploma Tiga Akuntansi</td>
                    <td>Tata Niaga</td>
                    <td>AKT</td>
                    <td>
                        <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash "></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- / Tabel Prodi --}}

        {{-- Modal Hapus--}}
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
        {{-- / Modal Hapus--}}
    </div>
</div>

@include('partial.footer')
@endsection