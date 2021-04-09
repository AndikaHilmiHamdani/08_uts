@extends('layouts.cruduser')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail User
            </div>
            
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID: </b>{{$users->id }}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$users->name  }}</li>
                    <li class="list-group-item"><b>email: </b>{{$users->email }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('user') }}">Kembali</a>
        </div>
    </div>
</div>

@endsection