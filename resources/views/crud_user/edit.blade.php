@extends('layouts.cruduser')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit User
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('update', $users->id) }}" id="myForm">
                    @csrf
                    @method('PUT') <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" name="id" class="form-control" id="id" value="{{ $users->id }}" aria-describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $users->name }}" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $users->email }}" aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>

                        <input type="password" name="password" class="form-control" id="password" value="{{ $users->password }}" aria-describedby="No_Handphone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection