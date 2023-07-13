@extends('Dashboard.layout.main')

@section('isi')
<!--**********************************
          Content body start
***********************************-->


<div class="row d-flex justify-content-evenly">
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body depostit-card">
                <div class="depostit-card-media d-flex justify-content-between style-1">
                    <div>
                        <h6>Total Anggota</h6>
                        <h3>{{ count($user) }}</h3>
                    </div>
                    <div class="icon-box bg-secondary">
                        <div class="menu-icon">
                            <i class="fas fa-solid fa-users fa-beat-fade text-white"> </i>
                        </div>
                    </div>
                </div>
                <div class="progress-box mt-0">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0">Anggota Acc</p>
                        <p class="mb-0">{{ count($acc) }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="mb-0">Anggota Belum Acc</p>
                        <p class="mb-0">{{ count($tolak) }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/Dashboard/User" class="btn btn-sm btn-primary">Read More..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Divisi</h6>
                        <h3>{{ count($divisi) }}</h3>
                    </div>
                    <div class="icon-box bg-primary">
                        <div class="menu-icon">
                            <i class="fas fa-solid fa-diamond fa-bounce text-white"> </i>
                        </div>
                    </div>
                </div>

                <div class="progress-box mt-0 ms-4 pb-3">
                    <div class="d-flex justify-content-between mt-5">
                        <a href="/Dashboard/Divisi" class="btn btn-sm btn-primary">Read More..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Surat</h6>
                        <h3>{{ count($surat) }}</h3>
                    </div>
                    <div class="icon-box bg-primary">
                        <div class="menu-icon">
                            <i class="fas fa-solid fa-box-archive fa-beat-fade text-white"> </i>
                        </div>
                    </div>
                </div>

                <div class="progress-box mt-0 pb-3 pe-3">
                    <div class="d-flex justify-content-between ms-4">
                        <p class="mb-0">Surat Acc Kabag</p>
                        <p class="mb-0">{{ count($kabag) }}</p>
                    </div>
                    <div class="d-flex justify-content-between ms-4">
                        <p class="mb-0">Surat Acc HRD</p>
                        <p class="mb-0">{{ count($kabag) }}</p>
                    </div>
                    <div class="d-flex justify-content-between ms-4">
                        <a href="/Dashboard/AllBox" class="btn btn-sm btn-primary">Read More..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
        Content body end
***********************************-->
@endsection