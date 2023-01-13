<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="./index.html">
            <img class="logo-brand" src="{{ asset('images/logos/main-logo.png') }}" alt="" />
        </a>

        {{-- @auth
            @if (auth()->user()->is_admin != 1) --}}
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/home') ? 'active' : '' }}"
                    href="{{ route('dashboard.index') }}">
                    <i class="fa-regular nav-icon fa-house me-2 fa-fw"></i>
                    Dashboard
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/surat*') ? '' : 'collapsed' }}" href="#!"
                    data-bs-toggle="collapse" data-bs-target="#navSurat" aria-expanded="false" aria-controls="navSurat">
                    <i class="fa-regular nav-icon fa-layer-group me-2 fa-fw"></i>
                    Surat
                </a>

                <div id="navSurat" class="collapse {{ Request::is('dashboard/surat*') ? 'show' : '' }}"
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/surat/surat-masuk') ? 'active' : '' }}"
                                href="{{ route('surat-masuk.index') }}">
                                Surat Masuk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow {{ Request::is('dashboard/surat/surat-keluar') ? 'active' : '' }}"
                                href="{{ route('surat-keluar.index') }}">
                                Surat Keluar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow {{ Request::is('dashboard/surat/approve') ? 'active' : '' }}"
                                href="{{ route('approve.index') }}">
                                Approve
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/masterdata*') ? '' : 'collapsed' }}"
                    href="#!" data-bs-toggle="collapse" data-bs-target="#navMasterData" aria-expanded="false"
                    aria-controls="navMasterData">
                    <i class="fa-regular nav-icon fa-layer-group me-2 fa-fw"></i>
                    Master Data
                </a>

                <div id="navMasterData" class="collapse {{ Request::is('dashboard/masterdata*') ? 'show' : '' }}"
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/masterdata/data-prodi') ? 'active' : '' }}"
                                href="{{ route('data-prodi.index') }}">
                                Data Prodi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow {{ Request::is('dashboard/masterdata/data-jurusan') ? 'active' : '' }}"
                                href="{{ route('data-jurusan.index') }}">
                                Data Jurusan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow {{ Request::is('dashboard/masterdata/mahasiswa') ? 'active' : '' }}"
                                href="{{ route('data-mahasiswa.index') }}">
                                Data Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow {{ Request::is('dashboard/masterdata/approvesior') ? 'active' : '' }}"
                                href="{{ route('data-approvesior.index') }}">
                                Data Approvesior
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/statistik-surat') ? 'active' : '' }}"
                    href="{{ route('statistik-surat.index') }}">
                    <i class="fa-regular nav-icon fa-list me-2 fa-fw"></i>
                    Statistik Surat
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow {{ Request::is('dashboard/users*') ? '' : 'collapsed' }}" href="#!"
                    data-bs-toggle="collapse" data-bs-target="#navUsers" aria-expanded="false" aria-controls="navUsers">
                    <i class="fa-regular nav-icon fa-layer-group me-2 fa-fw"></i>
                    Users
                </a>

                <div id="navUsers" class="collapse {{ Request::is('dashboard/users*') ? 'show' : '' }}"
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/users/data-user') ? 'active' : '' }}"
                                href="{{ route('data-user.index') }}">
                                Data User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow {{ Request::is('dashboard/users/profile') ? 'active' : '' }}"
                                href="{{ route('profile.index') }}">
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- @endif
        @endauth --}}

        </ul>

    </div>
</nav>
