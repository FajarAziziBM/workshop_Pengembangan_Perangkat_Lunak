@extends('auth.main')

@section('content')
<main class="main-content mt-0">
  <section>
    <div class="page-header min-vh-75">
      <div class="container">
              <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                  <div class="card mt-8 bg-transparent ">
                    <div class="card-header pb-0 text-left bg-transparent">
                      <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                    </div>
                    <div class="card-body">
                      <form role="form" method="POST" action="/login">
                        @csrf
                        <label class="text-info">Email</label>
                        <div class="mb-3">
                          <input type="email" class="form-control bg-transparent" name="email" id="email" placeholder="Email" value="" aria-label="Email" aria-describedby="email-addon" style="color: white">
                          @error('email')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                          @enderror
                        </div>
                        <label class="text-info">Password</label>
                        <div class="mb-3">
                          <input type="password" class="form-control bg-transparent" name="password" id="password" placeholder="Password" value="" aria-label="Password" aria-describedby="password-addon" style="color: white">
                          @error('password')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
