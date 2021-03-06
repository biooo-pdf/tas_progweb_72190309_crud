@extends('mahasiswa.layout')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name: </b>{{$mahasiswa->name}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$mahasiswa->jurusan}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$mahasiswa->email}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection