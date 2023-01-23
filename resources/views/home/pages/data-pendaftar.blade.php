@extends('home.layouts.index')

@section('content')
<div class="container" style="height: calc(100vh - 246px - 119px); min-height: 500px">
  <div class="d-flex justify-content-center mb-5">
    <h1>Data Calon Murid</h1>
  </div>
  <div class="table-responsive rounded shadow-lg">
    <table class="table table-light table-borderless table-hover mb-0">
      <thead>
        <tr>
          <th class="py-4 px-3">NISN</th>
          <th class="py-4 px-3">Nama Pendaftar</th>
          <th class="py-4 px-3">Asal Sekolah</th>
          <th class="py-4 px-3">Tempat Lahir</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($student as $item)
            <tr>
              <td class="p-3">{{ $item->nisn }}</td>
              <td class="p-3">{{ $item->nama_lengkap }}</td>
              <td class="p-3">{{ $item->asal_sekolah }}</td>
              <td class="p-3">{{ $item->tempat_lahir }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection