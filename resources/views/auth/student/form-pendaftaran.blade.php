@extends('auth.student.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lengkapi Formulir Untuk Seleksi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student-form.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nisn" class="col-md-4 col-form-label text-md-end">{{ __('NISN') }}</label>

                            <div class="col-md-6">
                                <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ Auth::user()->student->nisn }}" disabled autocomplete="nisn" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_lengkap" class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ Auth::user()->student->nama_lengkap }}" disabled autocomplete="nama_lengkap" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_telepon" class="col-md-4 col-form-label text-md-end">{{ __('No Handphone') }}</label>

                            <div class="col-md-6">
                                <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ Auth::user()->student->no_telepon }}" disabled autocomplete="no_telepon" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ Auth::user()->student->tempat_lahir }}" disabled autocomplete="tempat_lahir" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ Auth::user()->student->tanggal_lahir }}" disabled autocomplete="tanggal_lahir" autofocus>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" disabled autocomplete="email">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nik" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" autocomplete="nik">

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="asal_sekolah" class="col-md-4 col-form-label text-md-end">{{ __('Asal Sekolah') }}</label>

                            <div class="col-md-6">
                                <input id="asal_sekolah" type="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" value="{{ old('asal_sekolah') }}" autocomplete="asal_sekolah">

                                @error('asal_sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="umur" class="col-md-4 col-form-label text-md-end">{{ __('Umur') }}</label>

                            <div class="col-md-6">
                                <input id="umur" type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" autocomplete="umur">

                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" autocomplete="jenis_kelamin">
                                    <option value="l" {{old('jenis_kelamin') === 'l' ? 'selected' : ''}}>Laki-laki</option>
                                    <option value="p" {{old('jenis_kelamin') === 'p' ? 'selected' : ''}}>Perempuan</option>
                                </select>

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat">

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kebutuhan_khusus" class="col-md-4 col-form-label text-md-end">{{ __('Kebutuhan Khusus') }}</label>

                            <div class="col-md-6">
                                <input id="kebutuhan_khusus" type="kebutuhan_khusus" class="form-control @error('kebutuhan_khusus') is-invalid @enderror" name="kebutuhan_khusus" value="{{ old('kebutuhan_khusus') }}" autocomplete="kebutuhan_khusus">

                                @error('kebutuhan_khusus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="disabilitas" class="col-md-4 col-form-label text-md-end">{{ __('Disabilitas') }}</label>

                            <div class="col-md-6">
                                <select name="disabilitas" class="form-select @error('disabilitas') is-invalid @enderror" autocomplete="disabilitas">
                                    <option value="Tidak" {{old('disabilitas') === 'Tidak' ? 'selected' : ''}}>Tidak</option>
                                    <option value="Ya" {{old('disabilitas') === 'Ya' ? 'selected' : ''}}>Ya</option>
                                </select>

                                @error('disabilitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kip" class="col-md-4 col-form-label text-md-end">{{ __('No KIP (Jika ada)') }}</label>

                            <div class="col-md-6">
                                <input id="kip" type="kip" class="form-control @error('kip') is-invalid @enderror" name="kip" value="{{ old('kip') }}" autocomplete="kip">

                                @error('kip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_ayah_kandung" class="col-md-4 col-form-label text-md-end">{{ __('Nama Ayah Kandung') }}</label>

                            <div class="col-md-6">
                                <input id="nama_ayah_kandung" type="nama_ayah_kandung" class="form-control @error('nama_ayah_kandung') is-invalid @enderror" name="nama_ayah_kandung" value="{{ old('nama_ayah_kandung') }}" autocomplete="nama_ayah_kandung">

                                @error('nama_ayah_kandung')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_ibu_kandung" class="col-md-4 col-form-label text-md-end">{{ __('Nama Ibu Kandung') }}</label>

                            <div class="col-md-6">
                                <input id="nama_ibu_kandung" type="nama_ibu_kandung" class="form-control @error('nama_ibu_kandung') is-invalid @enderror" name="nama_ibu_kandung" value="{{ old('nama_ibu_kandung') }}" autocomplete="nama_ibu_kandung">

                                @error('nama_ibu_kandung')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_wali" class="col-md-4 col-form-label text-md-end">{{ __('Nama Wali') }}</label>

                            <div class="col-md-6">
                                <input id="nama_wali" type="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" name="nama_wali" value="{{ old('nama_wali') }}" autocomplete="nama_wali">

                                @error('nama_wali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                     

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
