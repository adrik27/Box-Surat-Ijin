@extends('Dashboard.layout.main')

@section('isi')
<div class="row ">
    <div class="col-md d-flex justify-content-center">
        <h1>Tambah Surat </h1>
    </div>
</div>

<div class="row">
    <form action="/Dashboard/Surat" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="mb-1"><strong>Email</strong><span class="text-danger">*Email tidak bisa di
                    rubah</span></label>
            <input type="email" name="email" class="bg-secondary text-white form-control @error('email')
                                                        is-invalid
                                                    @enderror" value="{{ Auth()->user()->email }}" required
                autocomplete="off" autofocus placeholder="Masukkan Email" readonly>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong>Pilih Kategori Surat</strong></label>
            <select class="form-select" aria-label="Default select example" name="KategoriSurat_id" autocomplete="off">
                @foreach ($kategoriSurat as $ks)
                @if (old('KategoriSurat_id' == $ks->id))
                <option value="{{ $ks->id }}" selected>{{ $ks->nama }}</option>
                @else
                <option value="{{ $ks->id }}">{{ $ks->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong>Tanggal Mulai Ijin</strong></label>
            <input type="date" name="TanggalMulaiIjin" class="form-control @error('TanggalMulaiIjin')
                                                                is-invalid
                                                            @enderror" value="{{ old('TanggalMulaiIjin') }}" required
                autocomplete="off" autofocus placeholder="Masukkan Tanggal Mulai Ijin">
            @error('TanggalMulaiIjin')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong>Tanggal Selesai Ijin</strong></label>
            <input type="date" name="TanggalSelesaiIjin" class="form-control @error('TanggalSelesaiIjin')
                                                                is-invalid
                                                            @enderror" value="{{ old('TanggalSelesaiIjin') }}" required
                autocomplete="off" autofocus placeholder="Masukkan Tanggal Selesai Ijin">
            @error('TanggalSelesaiIjin')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong>Catatan/Alasan</strong></label>
            <textarea type="text" name="catatan" class="form-control @error('catatan')
                                                                is-invalid
                                                            @enderror" value="{{ old('catatan') }}" required
                autocomplete="off" autofocus placeholder="Masukkan Catatan/Alasan Ijin"></textarea>
            @error('catatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong>Bukti Surat Ijin</strong></label>
            <input type="file" name="gambar" class="form-control @error('gambar')
                                                        is-invalid
                                                    @enderror" value="{{ old('gambar') }}" required autocomplete="off"
                autofocus placeholder="Masukkan Gambar">
            @error('gambar')
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