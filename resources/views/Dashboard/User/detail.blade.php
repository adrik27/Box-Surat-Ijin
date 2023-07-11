@extends('Dashboard.layout.main')

@section('isi')
<div class="row">
    <div class="col-md d-flex justify-content-center">
        <h1>Detail {{ $us->nama }}</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo rounded"></div>
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                        @if ($us->gambar)
                        <img src="{{ asset('storage/'.$us->gambar) }}" class="img-fluid rounded-circle h-50"
                            alt="{{ $us->nama }}">
                        @else
                        <img src="/template/xhtml/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                        @endif
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            <h4 class="text-primary mb-0">{{ $us->nama }}</h4>
                            <p>{{ $us->Divisi->nama }}</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            <h4 class="text-muted mb-0">{{ $us->email }}</h4>
                            <p>Email</p>
                        </div>
                        <div class="profile-alamt px-2 pt-2">
                            <h4 class="text-muted mb-0">{{ $us->alamat }}</h4>
                            <p>Alamat</p>
                        </div>
                        <div class="profile-alamt px-2 pt-2">
                            <h4 class="text-muted mb-0">{{ $us->telp }}</h4>
                            <p>Telpon</p>
                        </div>
                    </div>
                    <div class="kembali">
                        <a href="/Dashboard/User" class="btn btn-sm btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection