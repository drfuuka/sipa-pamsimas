@extends('layouts.index')
@section('title', 'Daftar Calon Siswa Administrasi - MTI Priangan')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Daftar Calon Siswa Administrasi</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Calon Siswa Administrasi</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Daftar Calon Siswa Administrasi MTI Pariangan</h4>
                            <p class="card-title-desc">Daftar calon siswa Administrasi MTI Pariangan</code>.
                            </p>
                        </div>

                        <div class="">
                            <a href="{{ route('daftar-calon-siswa.administrasi.export') }}" class="btn btn-primary">Export <i class="bx bx-plus"></i></a>
                        </div>
                    </div>


                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NISN</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($murid as $item)
                                @php
                                    $tulis = $item->nilai_tes_tulis/100*35;
                                    $administrasi = $item->nilai_tes_administrasi/100*30;
                                    $quran = $item->nilai_tes_quran/100*17.5;
                                    $tajwid = $item->nilai_tes_tajwid/100*17.5;
                                    $total = $quran + $tajwid + $tulis + $administrasi;
                                @endphp
                                <tr>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->tempat_lahir }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{$total >= 75 ? 'Lulus' : 'Tidak Lulus'}}</td>
                                    <td>{{$total}}
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a class="btn btn-outline-primary" href="{{ route('daftar-calon-siswa.administrasi.edit',$item->id) }}"><i class="bx bx-search-alt"></i> Lihat Detail</a>
                                            {{-- <form action="{{ route('daftar-calon-siswa.Non Akademik.destroy',$item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                                            </form> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
