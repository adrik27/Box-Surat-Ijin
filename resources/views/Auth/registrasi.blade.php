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
    <title>Sign Up</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ url('template/xhtml/images/favicon.png') }}">
    <link href="{{ url('template/xhtml/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100" style="background-image:url('template/xhtml/images/bg.png'); background-position:center;">
    <div class="h-100" authincation="">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    @if (session()->has('gagal'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('gagal') }}
                                        <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form action="/registrasi" method="POST" enctype="multipart/form-data">
                                        @csrf


                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Profil</strong></label>
                                            <input type="file" name="gambar" class="form-control @error('gambar')
                                                is-invalid
                                            @enderror" autocomplete="off" autofocus
                                                placeholder="Masukkan gambar profil">
                                            @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Nama</strong></label>
                                            <input type="text" name="nama" class="form-control @error('nama')
                                                is-invalid
                                            @enderror" value="{{ old('nama') }}" required autocomplete="off" autofocus
                                                placeholder="Masukkan nama lengkap">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Alamat</strong></label>
                                            <input type="text" name="alamat" class="form-control @error('alamat')
                                                is-invalid
                                            @enderror" value="{{ old('alamat') }}" required autocomplete="off"
                                                autofocus placeholder="Masukkan alamat">
                                            @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Telpon</strong></label>
                                            <input type="text" name="telp" class="form-control @error('telp')
                                                is-invalid
                                            @enderror" value="{{ old('telp') }}" required autocomplete="off" autofocus
                                                placeholder="Masukkan nomor telpon (+62)">
                                            @error('telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control @error('email')
                                                is-invalid
                                            @enderror" value="{{ old('email') }}" required autocomplete="off" autofocus
                                                placeholder="Masukkan email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control @error('password')
                                                is-invalid
                                            @enderror" value="{{ old('password') }}" required autocomplete="off"
                                                autofocus placeholder="Masukkan password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Pilih Divisi Anda</strong></label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="Divisi_id" autocomplete="off">
                                                @foreach ($divisi as $divi)
                                                @if (old('Divisi_id' == $divi->id))
                                                <option value="{{ $divi->id }}" selected>{{ $divi->nama }}</option>
                                                @else
                                                <option value="{{ $divi->id }}">{{ $divi->nama }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Pilih Role Anda sesuai divisi</strong></label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="Role_id" autocomplete="off">
                                                @foreach ($role as $rol)
                                                @if ($rol->id != 1)
                                                @if (old('Role_id' == $rol->id))
                                                <option value="{{ $rol->id }}" selected>{{ $rol->nama }}</option>
                                                @else
                                                <option value="{{ $rol->id }}">{{ $rol->nama }}</option>
                                                @endif
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account text-center mt-3">
                                        <p>Sudah ada akun? <a class="text-primary" href="/">Sign
                                                in</a></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg text-center">
                                            <span> © Copyright by <span
                                                    class="fas fa-solid fa-heart fa-fade text-danger"></span>
                                                <a href="https://muriatech.com/" class="text-primary">Muria Technology
                                                </a> All rights
                                                reserved.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--**********************************
	Scripts
***********************************-->
        <!-- Required vendors -->
        <script src="{{ url('template/xhtml/vendor/global/global.min.js') }}"></script>
        <script src="{{ url('template/xhtml/js/custom.js') }}"></script>
        <script src="{{ url('template/xhtml/js/deznav-init.js') }}"></script>
</body>

</html>