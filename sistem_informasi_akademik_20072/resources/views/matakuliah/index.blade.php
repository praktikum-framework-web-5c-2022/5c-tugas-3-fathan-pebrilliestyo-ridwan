@extends('layout')
@section('title','Matakuliah')
@section('active4','active')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10">
            <h3>Daftar Matakuliah Tersedia Fasilkom 2022</h3>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('mk.create')}}">Tambah Data</a>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode MK</th>
                        <th scope="col">Nama MK</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                      @foreach ($matakuliahs as $matakuliah) 
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $matakuliah->kode_mk }}</td>
                              <td>{{ $matakuliah->nama_mk }}</td>
                              <td>
                                  <form action="{{ route('mk.destroy', $matakuliah->id) }}" method="POST">
                                    <a class="btn btn-sm btn-success" href="{{ route('mk.edit', $matakuliah->id) }}">Edit</a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                  </form>    
                              </td>
                          </tr>
                      @endforeach
                  </table>
            </div>
        </div>
    </div>

@endsection