@include('admin_panel.layout.header_login')

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

    @include('admin_panel.layout.footer_login')