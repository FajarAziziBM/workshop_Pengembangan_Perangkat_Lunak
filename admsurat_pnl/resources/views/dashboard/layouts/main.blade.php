<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.partials.head')
    <title>@yield('title', 'Dashboard') | E-Surat PNL</title>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- Sidebar -->
        @include('dashboard.partials.sidebar')
        <!-- / Sidebar -->

        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- Navbar -->
                @include('dashboard.partials.navbar')
                <!-- / Navbar -->

            </div>
            <!-- Container fluid -->
            <div class="pt-6 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 fw-semibold text-dark">@yield('page-heading')</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    @include('dashboard.partials.scripts')
</body>

</html>
