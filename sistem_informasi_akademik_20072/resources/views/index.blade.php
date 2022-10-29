@extends('layout')
@section('title','Dashboard')
@section('active1','active')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <h1 class="mt-3">Dashboard</h1>
                </div> 
            </div>
            <div class="kartu col-lg-3">
                <div class="card">
                    <div class="card-header">
                      Dosen
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Dosen</h5>
                      <p class="card-text">Jumlah dosen aktif : {{ $dsn }} </p>
                      <a href="{{ route('dsn.index')}}" class="btn btn-primary">Lihat Data</a>
                    </div>
                  </div>
            </div>
            <div class="kartu col-lg-3">
                <div class="card">
                    <div class="card-header">
                      Mahasiswa
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Mahasiswa</h5>
                      <p class="card-text">Jumlah mahasiswa aktif : {{ $mhs }}</p>
                      <a href="{{ route('mhs.index')}}" class="btn btn-primary">Lihat Data</a>
                    </div>
                  </div>
            </div>
            <div class="kartu col-lg-3">
                <div class="card">
                    <div class="card-header">
                      Matakuliah
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Matakuliah</h5>
                      <p class="card-text">Jumlah MK tersedia : {{ $mk }}</p>
                      <a href="{{ route('mk.index')}}" class="btn btn-primary">Lihat Data</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection