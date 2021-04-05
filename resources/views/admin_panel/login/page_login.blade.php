<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    

    <title>Uinsu Website Administrator</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/lib/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/lib/ionicons/css/ionicons.min.css') }}">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/assets/css/dashforge.css') }}">

    <link rel="stylesheet" href="{{ asset('ladun/forge_template/assets/css/dashforge.auth.css') }}">
</head>

<body>

    <header class="navbar navbar-header navbar-header-fixed">
        <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
        <div class="navbar-brand">
            <a href="../../index.html" class="df-logo">Pustipada<span>&nbsp;Uinsu</span></a>
        </div><!-- navbar-brand -->
        <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
                <a href="../../index.html" class="df-logo">dash<span>forge</span></a>
                <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
            </div><!-- navbar-menu-header -->
            <ul class="nav navbar-menu">
                <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
                <li class="nav-item with-sub">
                    <a href="" class="nav-link"><i data-feather="pie-chart"></i> Feature System</a>
                    <ul class="navbar-menu-sub">
                        <li class="nav-sub-item"><a href="http://uinsu.ac.id" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Uinsu Website</a></li>
                        <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Uinsu Helpdeks System</a></li>
                        <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Uinsu Student Portal</a></li>
                        <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Uinsu Sitemap Site</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="#!" class="nav-link"><i data-feather="box"></i> Status Server</a></li>
                <li class="nav-item"><a href="#!" class="nav-link"><i data-feather="archive"></i> Contact</a></li>
            </ul>
        </div><!-- navbar-menu-wrapper -->
        <div class="navbar-right">
            <a href="http://dribbble.com/themepixels" class="btn btn-social"><i class="fab fa-dribbble"></i></a>
            <a href="https://github.com/themepixels" class="btn btn-social"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/themepixels" class="btn btn-social"><i class="fab fa-twitter"></i></a>

        </div><!-- navbar-right -->
    </header><!-- navbar -->

    <div class="content content-fixed content-auth" id="divLogin">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                <div class="media-body align-items-center d-none d-lg-flex">
                    <div class="mx-wd-600">
                        <img src="{{ asset('ladun/forge_template/assets/img/cover_1.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div><!-- media-body -->
                <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                    <div class="wd-100p">
                        <div style="text-align:center;">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/haxors-bucket/cdn/uinsu.png" style="width:150px;">
                        </div>
                        <div style="text-align:center;">
                            <h3 class="tx-color-01 mg-b-5">Information Systems Control Center</h3>
                            <p class="tx-color-03 tx-16 mg-b-40">Pusat Teknologi Informasi & Pangkalan Data<br>
                                Universitas Islam Negeri Sumatera Utara
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="username" id="txtUsername">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Password</label>
                                <a href="#!" class="tx-13">Forgot password?</a>
                            </div>
                            <input type="password" class="form-control" placeholder="Enter your password" id="txtPassword">
                        </div>
                        <a class="btn btn-brand-02 btn-block" href="#!" @click="loginAtc()">Sign In</a>
                        
                    </div>
                </div><!-- sign-wrapper -->
            </div><!-- media -->
        </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
        <div>
            <span>&copy; 2021 Pusat Teknologi Informasi & Pangkalan Data (PUSTIPADA) </span>
            <span>| Universitas Islam Negeri Sumatera Utara <a href="http://uinsu.ac.id">(UINSU)</a></span>
        </div>
        <div>
            <nav class="nav">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="../../change-log.html" class="nav-link">Change Log</a>
                <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{ asset('ladun/forge_template/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ladun/forge_template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ladun/forge_template/lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('ladun/forge_template/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="{{ asset('ladun/forge_template/assets/js/dashforge.js') }}"></script>
    <script>
        const server = "{{ url('/') }}/";
    </script>
    <script src="{{ asset('ladun/admin_asset/login_page/login.js') }}"></script>

    <!-- append theme customizer -->

</body>

</html>