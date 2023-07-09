@extends('Dashboard.layout.main')

@section('isi')
<div class="row ">
    <div class="col-md d-flex justify-content-center">
        <h1>Daftar User Anggota </h1>
    </div>
</div>

<div class="row">
    <div class="col-md d-flex justify-content-center">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md">
        <a href="/Dashboard/Anggota/create" class="btn btn-sm btn-success">Tambah Anggota</a>
    </div>
</div>

<div class="row mt-2">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects">
                    <div class="tbl-caption">
                        <h4 class="heading mb-0">Active Projects</h4>
                    </div>
                    <div id="projects-tbl_wrapper" class="dataTables_wrapper no-footer">
                        <div class="dt-buttons"><button
                                class="dt-button buttons-excel buttons-html5 btn btn-sm border-0" tabindex="0"
                                aria-controls="projects-tbl" type="button"><span><i class="fa-solid fa-file-excel"></i>
                                    Export
                                    Report</span></button> </div>
                        <table id="projects-tbl" class="table dataTable no-footer" role="grid"
                            aria-describedby="projects-tbl_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="No: activate to sort column descending" style="width: 147.312px;">
                                        No</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Divisi: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Divisi</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="nama: activate to sort column descending" style="width: 147.312px;">
                                        Nama</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="telpon: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Telpon</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="email: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Email</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="status: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Status</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="aksi: activate to sort column descending" style="width: 147.312px;">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($users) --}}
                                @foreach ($users as $us)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $us->Divisi->nama }}</td>
                                    <td>{{ $us->nama }}</td>
                                    <td>{{ $us->telp }}</td>
                                    <td>{{ $us->email }}</td>
                                    @if ($us->Status_id == 1)
                                    <td><span class="badge badge-warning">{{ $us->Status->nama }}</span></td>
                                    @elseif ($us->Status_id == 2)
                                    <td><span class="badge badge-success">{{ $us->Status->nama }}</span></td>
                                    @elseif ($us->Status_id == 3)
                                    <td><span class="badge badge-danger">{{ $us->Status->nama }}</span></td>
                                    @endif
                                    <td>
                                        <div class="aksi d-flex gap-2">
                                            <div class="edit">
                                                <a href="/Dashboard/Anggota/{{ $us->id }}/Edit"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                            </div>
                                            <div class="detail">
                                                <a href="/Dashboard/Anggota/{{ $us->id }}/Detail"
                                                    class="btn btn-sm btn-info">Detail</a>
                                            </div>
                                            <div class="hapus">
                                                <form action="/Dashboard/Anggota/{{ $us->id }}/Destroy" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection