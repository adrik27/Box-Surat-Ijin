@extends('Dashboard.layout.main')

@section('isi')
<div class="row ">
    <div class="col-md d-flex justify-content-center">
        <h1>Tambah User Anggota </h1>
    </div>
</div>

<div class="row">
    <form action="/Dashboard/User" method="post" enctype="multipart/form-data">
        @csrf

        {{-- <input type="hidden" name="Status_id"> --}}
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
                                                    @enderror" value="{{ old('nama') }}" required autocomplete="off"
                autofocus placeholder="Masukkan nama lengkap">
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
                                                    @enderror" value="{{ old('telp') }}" required autocomplete="off"
                autofocus placeholder="Masukkan nomor telpon (+62)">
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
                                                    @enderror" value="{{ old('email') }}" required autocomplete="off"
                autofocus placeholder="Masukkan email">
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
                                                    @enderror" value="{{ old('password') }}" required
                autocomplete="off" autofocus placeholder="Masukkan password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Pilih Divisi Anda</strong></label>
            <select class="form-select" aria-label="Default select example" name="Divisi_id" autocomplete="off">
                @foreach ($divisi as $divi)
                @if ($divi->id != 1)
                @if (old('Divisi_id' == $divi->id))
                <option value="{{ $divi->id }}" selected>{{ $divi->nama }}</option>
                @else
                <option value="{{ $divi->id }}">{{ $divi->nama }}</option>
                @endif
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Pilih Role Anda sesuai divisi</strong></label>
            <select class="form-select" aria-label="Default select example" name="Role_id" autocomplete="off">
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
            <button type="submit" class="btn btn-primary btn-block"
                onclick="return confirm('Apakah anda yakin untuk menyimpan data ini ?')">Simpan</button>
        </div>
    </form>
</div>
@endsection