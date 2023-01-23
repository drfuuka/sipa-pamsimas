@extends('home.layouts.index')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 246px - 119px)">
  <div>
    <h1 class="fw-700 mb-5">Status Kelulusan</h1>
    <span class="display-1">{{Auth::user()->student->status}}</span>
  </div>
</div>
@endsection