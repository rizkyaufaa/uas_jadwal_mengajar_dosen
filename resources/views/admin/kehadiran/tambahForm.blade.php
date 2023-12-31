@extends('components.app')
@section('title')
Tambah Data
@endsection
@extends('components.sidebar')
@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Kehadiran</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
        
    </div>
</div>
<div>
    <h4>Form Tambah Kehadiran</h4>
</div>
<form action="{{route('kehadiran.saveKehadiran')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="contohInputEmail1">Nama Pengguna</label>
        <select class="js-contoh-basic-single" name='user_id' aria-label="Default select contoh">
            <option value="">Pilih Nama</option>
            @foreach($fetchUser as $user)
            <option value="{{$user->id}}">{{ $user->name }}</option>
            @endforeach
        </select>
        <small id="emailHelp" class="form-text text-muted">contoh : Leonard</small>
    </div>
    <div class="form-group">
        <label for="contohInputEmail1">Jam Masuk</label>
        <input type="datetime-local" name="jam_masuk" class="form-control" id="contohInputEmail1" aria-describedby="emailHelp" value="{{ now()->setTimezone('T')->format('Y-m-dTh:m') }}">
        <small id="emailHelp" class="form-text text-muted">contoh : Tanggal / Jam</small>
    </div>
    <div class="form-group">
        <label for="contohInputPassword1">Jam Keluar</label>
        <input type="datetime-local" name="jam_keluar" class="form-control" id="contohInputPassword1" placeholder="Enter jam keluar">
        <small id="emailHelp" class="form-text text-muted">contoh : Tanggal / Jam</small>
    </div>
    <div class="form-group">
        @php
        $data = 'M';
        @endphp
        <label for="contohInputPassword1">Keterangan</label>
        <br>
        <input type="radio" name="status" value="M" {{ $data === 'M' ? 'checked' : '' }}> Masuk
        <input type="radio" name="status" value="A" {{ $data === 'A' ? 'checked' : '' }}> Alpa
        <input type="radio" name="status" value="I" {{ $data === 'I' ? 'checked' : '' }}> Izin
        <input type="radio" name="status" value="S" {{ $data === 'S' ? 'checked' : '' }}> Sakit
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection