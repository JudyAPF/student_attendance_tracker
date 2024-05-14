<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')
</head>

<body>
    <div id="app">
        <div id="wrapper">
            <!-- Sidebar -->
            @include('template.sidebar_instructor')
            <!-- Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- TopBar -->
                    @include('template.topbar_instructor')
                    <!-- Topbar -->
                    <!-- Container Fluid-->
                    <div class="container-fluid" id="container-wrapper">
                        @yield('content')
                    </div>
                    <!---Container Fluid-->
                </div>
                <!-- Footer -->
                @include('template.footer_instructor')
                <!-- Footer -->
            </div>
        </div>
    </div>
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
    <!-- <script src="{{ asset('js/vendor/Chart.min.js') }}"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script> -->
    @yield('script')
</body>

</html>
