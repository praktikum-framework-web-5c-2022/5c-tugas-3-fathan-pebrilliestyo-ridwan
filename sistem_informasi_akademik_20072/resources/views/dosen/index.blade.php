@extends('layout')
@section('title','Dosen')
@section('active2','active')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <h3>Daftar Dosen Aktif Fasilkom 2022</h3>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('dsn.create')}}">Tambah Data</a>
        </div>
    </div> 

    <div class="row">
        <div class="col">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('message') }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">NIDN</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">TTL</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          @foreach ($dosens as $dosen) 
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <img src="{{ asset('storage/'.$dosen->photo) }}" width="100px" height="100px">
                </td>
                  <td>{{ $dosen->nidn }}</td>
                  <td>{{ $dosen->nama }}</td>
                  <td>{{ $dosen->jenis_kelamin }}</td>
                  <td>{{ $dosen->alamat }}</td>
                  <td>{{ $dosen->tempat_lahir }} , {{ $dosen->tanggal_lahir }}</td>
                  <td>
                      <form action="{{ route('dsn.destroy', $dosen->id) }}" method="POST">
                        <a class="btn btn-sm btn-success" href="{{ route('dsn.edit', $dosen->id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>    
                  </td>
              </tr>
          @endforeach
      </table>

@endsection