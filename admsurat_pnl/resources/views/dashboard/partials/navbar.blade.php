<nav class="navbar-classic navbar navbar-expand-lg rounded-4 m-2">
    <a id="nav-toggle" href="#"><i class="fa-regular nav-icon fa-bars me-1"></i></a>

    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
        <!-- List -->
        <li class="dropdown ms-2">
            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="{{ asset('images/avatar.png') }}" class="rounded-circle" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                <div class="px-4 pb-0 pt-2">
                    <div class="lh-1 ">
                        @auth
                            <h5 class="mb-1">{{ auth()->user()->username }}</h5>
                        @endauth
                    </div>
                    <div class=" dropdown-divider mt-3 mb-2"></div>
                </div>

                <ul class="list-unstyled">
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item">
                                <i class="fa-regular dropdown-item-icon fa-arrow-right-from-bracket me-1 fa-fw"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>

            </div>
        </li>
    </ul>
</nav>
