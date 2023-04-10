@extends('layouts.index')
@section('title', 'Ubah Daftar Calon Siswa Non Akademik - MTI Priangan')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Ubah Daftar Calon Siswa Non Akademik</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('daftar-calon-siswa.non-akademik.index') }}">Daftar Calon
                                Siswa</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
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

                    <h4 class="card-title">Ubah Daftar Calon Siswa Non Akademik MTI Pariangan</h4>
                    <p class="card-title-desc">Ubah calon siswa MTI Pariangan</code>.
                    </p>

                    <form method="POST" action="{{ route('daftar-calon-siswa.non-akademik.update', $student->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nisn" class="col-md-4 col-form-label text-md-end">{{ __('NISN') }}</label>

                            <div class="col-md-6">
                                <input id="nisn" type="text" disabled
                                    class="form-control @error('nisn') is-invalid @enderror" name="nisn"
                                    value="{{$student->nisn}}" autocomplete="nisn" autofocus>

                                @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_lengkap"
                                class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" disabled
                                    class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap"
                                    value="{{$student->nama_lengkap}}" autocomplete="nama_lengkap" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_telepon"
                                class="col-md-4 col-form-label text-md-end">{{ __('No Handphone') }}</label>

                            <div class="col-md-6">
                                <input id="no_telepon" type="text" disabled
                                    class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                    value="{{$student->no_telepon}}" autocomplete="no_telepon" autofocus>

                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tempat_lahir"
                                class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" disabled
                                    class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                                    value="{{$student->tempat_lahir}}" autocomplete="tempat_lahir" autofocus>

                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="text" disabled
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                                    value="{{$student->tanggal_lahir}}" autocomplete="tanggal_lahir" placeholder="hh-mm-yyyy"
									data-date-format="yyyy-mm-dd"
									data-provide="datepicker" autofocus>

                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" disabled
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{$student->user->email}}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            
                            <label class="col-md-4 col-form-label text-md-end">Status Kelulusan</label>
                            <div class="col-md-6">
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option selected>Pilih status</option>
                                    <option value="Menunggu" {{$student->status === 'pending' ? 'selected' : ''}}>Menunggu</option>
                                    <option value="Lulus" {{$student->status === 'lulus' ? 'selected' : ''}}>Lulus</option>
                                    <option value="Tidak Lulus" {{$student->status === 'tidak lulus' ? 'selected' : ''}}>Tidak Lulus</option>
                                </select>
                            </div>

                            @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> --}}
                        
                        <div class="row mb-3">
                            <label for="nilai_tes_tulis"
                                class="col-md-4 col-form-label text-md-end">{{ __('Nilai Tes Tulis') }}</label>

                            <div class="col-md-6">
                                <input id="nilai_tes_tulis" type="number" 
                                    class="form-control @error('nilai_tes_tulis') is-invalid @enderror" name="nilai_tes_tulis"
                                    value="{{$student->nilai_tes_tulis}}" autocomplete="nilai_tes_tulis">

                                @error('nilai_tes_tulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nilai_tes_administrasi"
                                class="col-md-4 col-form-label text-md-end">{{ __('Nilai Tes Administrasi') }}</label>

                            <div class="col-md-6">
                                <input id="nilai_tes_administrasi" type="number" 
                                    class="form-control @error('nilai_tes_administrasi') is-invalid @enderror" name="nilai_tes_administrasi"
                                    value="{{$student->nilai_tes_administrasi}}" autocomplete="nilai_tes_administrasi">

                                @error('nilai_tes_administrasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
           
                        <div class="row mb-3">

                            <label for="nilai_tes_quran"
                                class="col-md-4 col-form-label text-md-end">{{ __('Nilai Tes Quran') }}</label>

                            <div class="col-md-6">
                                <input id="nilai_tes_quran" type="number" 
                                    class="form-control @error('nilai_tes_quran') is-invalid @enderror" name="nilai_tes_quran"
                                    value="{{$student->nilai_tes_quran}}" autocomplete="nilai_tes_quran">

                                @error('nilai_tes_quran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">

                            <label for="nilai_tes_tajwid"
                                class="col-md-4 col-form-label text-md-end">{{ __('Nilai Tes Tajwid') }}</label>

                            <div class="col-md-6">
                                <input id="nilai_tes_tajwid" type="number" 
                                    class="form-control @error('nilai_tes_tajwid') is-invalid @enderror" name="nilai_tes_tajwid"
                                    value="{{$student->nilai_tes_tajwid}}" autocomplete="nilai_tes_tajwid">

                                @error('nilai_tes_tajwid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ubah Data Siswa
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
