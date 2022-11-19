@extends('layouts.user_type.auth')

@section('content')


<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
  <div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Alec Thompson
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              CEO / Co-Founder
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-4">
    <div class="card">
      <form>
        <div class="card-header pb-0">
          <div class="col-auto">
            <h4 class="form-section">Data Diri</h4>
            <p>
            </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Nama Mahasiswa</label>
                  <div class="col-md-9">
                    <p class="form-control-static">Fajar Azizi Boang Manalu</p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">NIK</label>
                  <div class="col-md-9">
                    <input type="text" name="input[nik]" value="1175021410010002" id="nik" class="form-control input-large" data-required="1" maxlength="50" aria-invalid="false" aria-describedby="nik-error"><span id="nik-error" class="error"></span>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Kota Lahir</label>
                  <div class="col-md-9">
                    <input type="text" name="input[kotaLahir]" value="Berastagi" id="kotaLahir" class="form-control input-medium" data-required="1" maxlength="50" aria-required="true" aria-invalid="false" aria-describedby="kotaLahir-error"><span id="kotaLahir-error" class="error"></span>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Tanggal Lahir</label>
                  <div class="col-md-9">
                    <input type="text" name="input[tglLahir]" value="14-10-2001" id="tglLahir" class="form-control input-small date-picker" data-date="13-11-2022" data-date-format="dd-mm-yyyy" data-date-viewmode="years" maxlength="10" style="text-align: center; background-color: rgb(255, 255, 255);">
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Agama</label>
                  <div class="col-md-9">
                    <select name="input[fk_kdAgama]" id="fk_kdAgama" class="form-control input-large" data-placeholder="Pilih" tabindex="1">
                      <option value="99">-</option>
                      <option value="5">Budha</option>
                      <option value="4">Hindu</option>
                      <option value="1" selected="selected">Islam</option>
                      <option value="3">Katholik</option>
                      <option value="6">Konghucu</option>
                      <option value="2">Kristen</option>
                      <option value="98">Tidak diisi</option>
                    </select>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <select name="input[fk_idJenisKelamin]" id="fk_idJenisKelamin" class="form-control input-large" data-placeholder="Pilih" tabindex="1">
                      <option value="-">-</option>
                      <option value="L" selected="selected">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Gol. Darah</label>
                  <div class="col-md-9">
                    <select name="input[fk_idDarah]" id="fk_idDarah" class="form-control input-large
							" data-placeholder="Pilih" tabindex="1">
                      <option value="X">-</option>
                      <option value="A" selected="selected">A</option>
                      <option value="AB">AB</option>
                      <option value="B">B</option>
                      <option value="O">O</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">No telepon (HP)</label>
                  <div class="col-md-9">
                    <input type="text" name="input[tlpMhs]" value="085373934232" id="tlpMhs" class="form-control input-medium" maxlength="15">
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-9">
                    <input type="text" name="input[email]" value="fajaraziziboangmanalu97902@gmail.com" id="email" class="form-control input-medium" maxlength="50">
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
          </div>
        </div>
      </form>


      <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Profile Information') }}</h6>
      </div>
      <div class="card-body pt-4 p-3">
        <form action="/user-profile" method="POST" role="form text-left">
          @csrf
          @if($errors->any())
          <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
            <span class="alert-text text-white">
              {{$errors->first()}}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <i class="fa fa-close" aria-hidden="true"></i>
            </button>
          </div>
          @endif
          @if(session('success'))
          <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
            <span class="alert-text text-white">
              {{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <i class="fa fa-close" aria-hidden="true"></i>
            </button>
          </div>
          @endif
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>
                <div class="@error('user.name')border border-danger rounded-3 @enderror">
                  <input class="form-control" value="{{ auth()->user()->name }}" type="text" placeholder="Name" id="user-name" name="name">
                  @error('name')
                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                <div class="@error('email')border border-danger rounded-3 @enderror">
                  <input class="form-control" value="{{ auth()->user()->email }}" type="email" placeholder="@example.com" id="user-email" name="email">
                  @error('email')
                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="user.phone" class="form-control-label">{{ __('Phone') }}</label>
                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                  <input class="form-control" type="tel" placeholder="40770888444" id="number" name="phone" value="{{ auth()->user()->phone }}">
                  @error('phone')
                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="user.location" class="form-control-label">{{ __('Location') }}</label>
                <div class="@error('user.location') border border-danger rounded-3 @enderror">
                  <input class="form-control" type="text" placeholder="Location" id="name" name="location" value="{{ auth()->user()->location }}">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="about">{{ 'About Me' }}</label>
            <div class="@error('user.about')border border-danger rounded-3 @enderror">
              <textarea class="form-control" id="about" rows="3" placeholder="Say something about yourself" name="about_me">{{ auth()->user()->about_me }}</textarea>
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <br>
  <div class="container-fluid">
    <form>
      <div class="card-header pb-0">
        <div class="col-auto">
          <h4 class="form-section">Data Diri</h4>
          <p>
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Nama Mahasiswa</label>
                <div class="col-md-9">
                  <p class="form-control-static">Fajar Azizi Boang Manalu</p>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">NIK</label>
                <div class="col-md-9">
                  <input type="text" name="input[nik]" value="1175021410010002" id="nik" class="form-control input-large" data-required="1" maxlength="50" aria-invalid="false" aria-describedby="nik-error"><span id="nik-error" class="error"></span>
                </div>
              </div>
            </div>
            <!--/span-->
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Kota Lahir</label>
                <div class="col-md-9">
                  <input type="text" name="input[kotaLahir]" value="Berastagi" id="kotaLahir" class="form-control input-medium" data-required="1" maxlength="50" aria-required="true" aria-invalid="false" aria-describedby="kotaLahir-error"><span id="kotaLahir-error" class="error"></span>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Tanggal Lahir</label>
                <div class="col-md-9">
                  <input type="text" name="input[tglLahir]" value="14-10-2001" id="tglLahir" class="form-control input-small date-picker" data-date="13-11-2022" data-date-format="dd-mm-yyyy" data-date-viewmode="years" maxlength="10" style="text-align: center; background-color: rgb(255, 255, 255);">
                </div>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Agama</label>
                <div class="col-md-9">
                  <select name="input[fk_kdAgama]" id="fk_kdAgama" class="form-control input-large" data-placeholder="Pilih" tabindex="1">
                    <option value="99">-</option>
                    <option value="5">Budha</option>
                    <option value="4">Hindu</option>
                    <option value="1" selected="selected">Islam</option>
                    <option value="3">Katholik</option>
                    <option value="6">Konghucu</option>
                    <option value="2">Kristen</option>
                    <option value="98">Tidak diisi</option>
                  </select>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Jenis Kelamin</label>
                <div class="col-md-9">
                  <select name="input[fk_idJenisKelamin]" id="fk_idJenisKelamin" class="form-control input-large" data-placeholder="Pilih" tabindex="1">
                    <option value="-">-</option>
                    <option value="L" selected="selected">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Gol. Darah</label>
                <div class="col-md-9">
                  <select name="input[fk_idDarah]" id="fk_idDarah" class="form-control input-large
							" data-placeholder="Pilih" tabindex="1">
                    <option value="X">-</option>
                    <option value="A" selected="selected">A</option>
                    <option value="AB">AB</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">No telepon (HP)</label>
                <div class="col-md-9">
                  <input type="text" name="input[tlpMhs]" value="085373934232" id="tlpMhs" class="form-control input-medium" maxlength="15">
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-3">Email</label>
                <div class="col-md-9">
                  <input type="text" name="input[email]" value="fajaraziziboangmanalu97902@gmail.com" id="email" class="form-control input-medium" maxlength="50">
                </div>
              </div>
            </div>
            <!--/span-->
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection