@extends('components.app')
@section('title')
Form Edit User
@endsection
@extends('components.sidebar')
@section('konten')
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard User</h1>

                    <div class="btn-toolbar mb-2 mb-md-0">
                        
                    </div>
                </div>
                <div>
                    <h4>Form Edit User</h4>
                </div>
                <form action="{{route('user.updateUser',$user->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pengguna</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{ old('name') ?? $user->name}}">
                        <small id="emailHelp" class="form-text text-muted">example : Leonard</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') ?? $user->email}}">
                        <small id="emailHelp" class="form-text text-muted">ex. leonard@unmuhpnk.ac.id</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('password') ?? $user->password}}">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
@endsection