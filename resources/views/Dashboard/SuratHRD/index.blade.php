@extends('Dashboard.layout.main')

@section('isi')
<div class="row ">
    <div class="col-md d-flex justify-content-center">
        <h1>Daftar Surat HRD</h1>
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

<div class="row mt-2">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects">
                    <div class="tbl-caption">
                        <h4 class="heading mb-0">Surat HRD</h4>
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
                                        aria-label="Email: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Email</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Kategori Surat: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Kategori Surat</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Tanggal Ijin: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Tanggal Ijin</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Tanggal Selesai Ijin: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Tanggal Selesai Ijin</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Status KABAG: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Status KABAG</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Status HRD: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Status HRD</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Catatan: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Catatan</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="projects-tbl" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="gambar: activate to sort column descending"
                                        style="width: 147.312px;">
                                        Bukti</th>
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="projects-tbl"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="aksi: activate to sort column descending" style="width: 147.312px;">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($suratPegawai) --}}
                                @foreach ($surat as $sp)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sp->email }}</td>
                                    <td>{{ $sp->KategoriSurat->nama }}</td>
                                    <td>{{ $sp->TanggalMulaiIjin }}</td>
                                    <td>{{ $sp->TanggalSelesaiIjin }}</td>
                                    <td>
                                        @if ($sp->StatusKabag == 'Kirim')
                                        <span class="badge badge-sm badge-primary">{{ $sp->StatusKabag }}</span>
                                        @elseif ($sp->StatusKabag == 'Acc')
                                        <span class="badge badge-sm badge-success">{{ $sp->StatusKabag }}</span>
                                        @elseif ($sp->StatusKabag == 'Tolak')
                                        <span class="badge badge-sm badge-danger">{{ $sp->StatusKabag }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($sp->StatusHrd == 'Kirim')
                                        <span class="badge badge-sm badge-primary">{{ $sp->StatusHrd }}</span>
                                        @elseif ($sp->StatusHrd == 'Acc')
                                        <span class="badge badge-sm badge-success">{{ $sp->StatusHrd }}</span>
                                        @elseif ($sp->StatusHrd == 'Tolak')
                                        <span class="badge badge-sm badge-danger">{{ $sp->StatusHrd }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $sp->catatan }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $sp->gambar) }}" target="_blank">{{
                                            $sp->gambar
                                            }}</a>
                                    </td>
                                    @if ($sp->StatusHrd == 'Kirim')
                                    <td>
                                        <div class="aksi d-flex gap-2 justify-content-center">
                                            <div class="acc">
                                                <form action="/Dashboard/HRD/{{ $sp->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $sp->id }}">
                                                    <button type="submit" class="btn btn-sm btn-success"
                                                        onclick="return confirm('Apakah anda yakin untuk acc surat ini ?')">Acc</button>
                                                </form>
                                            </div>
                                            <div class="tolak">
                                                <form action="/Dashboard/HRD/{{ $sp->id }}/Tolak" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $sp->id }}">
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah anda yakin untuk menolak surat ini ?')">Tolak</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    @else
                                    <td class="text-center">
                                        <span class="badge badge-sm badge-info">Selesai</span>
                                    </td>
                                    @endif
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