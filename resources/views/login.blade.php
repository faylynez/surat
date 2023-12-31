<!doctype html>
<html lang="en">
    <base href="http://127.0.0.1:8000/auth/">


<!-- Mirrored from themesbrand.com/dason/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Oct 2022 03:54:00 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Halaman Login Aplikasi Surat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-sm.svg" alt="" height="28"> <span
                                            class="logo-txt">APLIKASI SURAT</span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Selamat Datang !</h5>
                                        <p class="text-muted mt-2">Sign in to continue to Aplikasi Surat.</p>
                                    </div>
                                    <form class="mt-4 pt-2" action="/" method="post">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input value="{{old('email')}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="input-username"
                                                placeholder="Enter User Name">
                                            <label for="input-username">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                            <input name="password" type="password" class="form-control pe-5 @error('password') is-invalid @enderror" id="password-input"
                                                placeholder="Enter Password">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror

                                            <button type="button"
                                                class="btn btn-link position-absolute h-100 end-0 top-0"
                                                id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())

                                        </script> Rpl Corp . Build with <i class="mdi mdi-heart text-danger"></i> by RPL
                                        LaraV9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay"></div>
                        <ul class="bg-bubbles">

                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>


                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <script src="assets/js/pages/pass-addon.init.js"></script>

    <script src="assets/js/pages/feather-icon.init.js"></script>

</body>


<!-- Mirrored from themesbrand.com/dason/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Oct 2022 03:54:00 GMT -->

</html>