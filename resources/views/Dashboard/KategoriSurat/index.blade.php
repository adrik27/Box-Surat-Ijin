@extends('Dashboard.layout.main')

@section('isi')
<div class="row ">
    <div class="col-md d-flex justify-content-center">
        <h1>Daftar Kategori Surat</h1>
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
        <a href="/Dashboard/KategoriSurat/create" class="btn btn-sm btn-success">Tambah Kategori</a>
    </div>
</div>

<div class="row mt-2">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects">
                    <div class="tbl-caption">
                        <h4 class="heading mb-0">Kategori Box</h4>
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
                                        aria-label="nama: activate to sort column descending" style="width: 147.312px;">
                                        Nama</th>
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="projects-tbl"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="aksi: activate to sort column descending" style="width: 147.312px;">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($users) --}}
                                @foreach ($kategoris as $kb)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kb->nama }}</td>
                                    <td>
                                        <div class="aksi d-flex gap-2 justify-content-center">
                                            <div class="edit">
                                                <a href="/Dashboard/KategoriSurat/{{ $kb->id }}/edit"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                            </div>
                                            <div class="hapus">
                                                <form action="/Dashboard/KategoriSurat/{{ $kb->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @method('DELETE')
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