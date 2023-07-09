<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>SIGN IN</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="template/xhtml/images/favicon.png">
    <link href="template/xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="template/xhtml/css/style.css" rel="stylesheet">

    {{-- script untuk menampilkan capthca --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="vh-100">
    <div class="page-wraper">

        <!-- Content -->
        <div class="browse-job login-style3">
            <!-- Coming Soon -->
            <div class="bg-img-fix overflow-hidden"
                style="background:#fff url(template/xhtml/images/background/bg6.jpg); height: 100vh;">
                <div class="row gx-0">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 vh-100 bg-white ">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
                            style="max-height: 653px;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                                dir="ltr">
                                <div class="login-form style-2">

                                    <div class="row">
                                        <div class="col-lg">
                                            @if (session()->has('gagal'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('gagal') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg">
                                            @if (session()->has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg">
                                            @if (session()->has('warning'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                {{ session('warning') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="logo-header">
                                            <h5>Sign In</h5>
                                        </div>

                                        <nav>
                                            <div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">

                                                <div class="tab-content w-100" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-personal"
                                                        role="tabpanel" aria-labelledby="nav-personal-tab">
                                                        <form action="/login" class=" dz-form pb-3" method="POST"
                                                            id="myForm">
                                                            @csrf
                                                            <h3 class="form-title m-t0">Personal Information</h3>
                                                            <div class="dz-separator-outer m-b5">
                                                                <div class="dz-separator bg-primary style-liner"></div>
                                                            </div>
                                                            <p>Enter your e-mail address and your password. </p>

                                                            <div class="form-group mb-3">
                                                                <input type="email" name="email" class="form-control @error('email')
                                                                    is-invalid
                                                                @enderror" required autocomplete="off" autofocus
                                                                    placeholder="hello@example.com"
                                                                    value="{{ old('email') }}">
                                                                @error('email')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <input type="password" name="password" required
                                                                    autocomplete="off" class="form-control @error('password')
                                                                        is-invalid
                                                                    @enderror" placeholder="Password">
                                                                @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                            {{-- kode untuk menampilkan capthca --}}
                                                            <div class="g-recaptcha"
                                                                data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                                                                name="g-recaptcha-response">
                                                            </div>

                                                            <div class="text-center bottom ">
                                                                <button class="btn btn-primary button-md btn-block"
                                                                    id="nav-sign-tab" type="submit">Login</button>

                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="row">
                                        <div class="col-md d-flex justify-content-center">
                                            <span class="text-center">Belum punya akun? <a href="/registrasi"
                                                    class="text-primary">Registrasi</a></span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row text-center">
                                            <div class="col-lg text-center">
                                                <span> © Copyright by <span
                                                        class="fas fa-solid fa-heart fa-fade text-danger"></span>
                                                    <a href="https://muriatech.com/" class="text-primary">Muria
                                                        Technology
                                                    </a> All rights
                                                    reserved.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="mCSB_1_scrollbar_vertical"
                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"
                            style="display: block;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                    style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 0px;"></div>
                                    <div class="mCSB_draggerRail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Blog Page Contant -->
    </div>
    <!-- Content END-->
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="template/xhtml/vendor/global/global.min.js"></script>
    <script src="template/xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="template/xhtml/js/deznav-init.js"></script>
    <script src="template/xhtml/js/custom.js"></script>
    <script src="template/xhtml/js/demo.js"></script>
    <script src="template/xhtml/js/styleSwitcher.js"></script>

    <script>
        function onSubmit(token) {
        document.getElementById("myForm").submit();
    }
    </script>
</body>

</html>