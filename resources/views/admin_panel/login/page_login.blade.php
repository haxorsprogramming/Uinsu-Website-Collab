<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>HMAC Login Autentication with Face Verification</title>

    <!-- vendor css -->
    <link href="forge_template/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="forge_template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="forge_template/assets/css/dashforge.css">
    
    <link rel="stylesheet" href="forge_template/assets/css/dashforge.auth.css">
    <script defer src="login_page/face-api.min.js"></script>
    <script defer src="login_page/script.js""></script>
    <style>
    body{
        display: flex;
    }

    #divFaceLogin{
        margin: 0;
        padding: 0;
        width: 100vw;
        height: 100vh;
        justify-content: center;
        align-items: center;
    }

    canvas {
       position: absolute;  
    }
    </style>
  </head>
  <body>
  <header class="navbar navbar-header navbar-header-fixed">
      <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="../../index.html" class="df-logo">HMAC<span>&nbsp;Login</span></a>
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
  <div id="divLogin">
    
    <div id="divFaceLogin">
        <img src="https://s3-id-jkt-1.kilatstorage.id/nadhamedia/set_img.png" style="width:700px;margin-top:100px;" id="imgFotoSamping">
        <video id="video" width="820" height="560" autoplay muted  style="display:none;"></video>
        <br/>
       <div style="margin-left:10%;margin-top:30px;"><h4>[[capVerifikasi]]</h4></div>
    </div>

  <div id="" style="padding-left:1050px;margin-top:-880px;margin-right:100px;">
    <div class="wd-100p">
            <div style="text-align:center;">
                <img src="https://s3-id-jkt-1.kilatstorage.id/haxors-bucket/cdn/uinsu.png" style="width:150px;">
            </div>
                <div style="text-align:center;">
                    <h3 class="tx-color-01 mg-b-5">Aplikasi Koperasi Simpan Pinjam </h3>
                    <p class="tx-color-03 tx-16 mg-b-40">Koperasi PTPN IV Adolina<br>         
                    </p>
                </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="username" id="txtUsername">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password" id="txtPassword">
              </div>
              <a class="btn btn-brand-02 btn-block" id="btnLoginAwal" href="#!" @click="loginAtc()">Verifikasi Password</a>
              <div style="text-align:center;margin-top:20px;">Develop By : Nurul Pratiwi<br/>
              Program Studi Ilmu Komputer<br/>
              Fakultas Sains dan Teknologi<br/>
              Universitas Islam Negeri Sumatera Utara
              </div>
            </div>
  </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="forge_template/lib/jquery/jquery.min.js"></script>
    <script src="forge_template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="forge_template/lib/feather-icons/feather.min.js"></script>
    <script src="forge_template/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <script src="forge_template/assets/js/dashforge.js"></script>
    <script>
      const server = "";
    </script>
    
    <script src= "login_page/login.js"></script>

    <!-- append theme customizer -->
    
  </body>
</html>
