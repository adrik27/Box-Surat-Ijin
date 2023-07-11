@extends('Dashboard.layout.main')

@section('isi')
<div class="row ">
    <div class="col-md d-flex justify-content-center">
        <h1>Tambah Kategori Surat </h1>
    </div>
</div>

<div class="row">
    <form action="/Dashboard/KategoriSurat" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="mb-1"><strong>Nama</strong></label>
            <input type="text" name="nama" class="form-control @error('nama')
                                                        is-invalid
                                                    @enderror" value="{{ old('nama') }}" required autocomplete="off"
                autofocus placeholder="Masukkan Kategori Surat">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block"
                onclick="return confirm('Apakah anda yakin untuk menyimpan data ini ?')">Simpan</button>
        </div>
    </form>
</div>
@endsection