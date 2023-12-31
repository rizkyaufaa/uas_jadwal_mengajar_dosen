@extends('components.app')
@section('title')
Dashboard Admin
@endsection
@extends('components.sidebar')
@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        
    </div>
</div>
<div class="card-body">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    You are Logged In
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<h2>Section title</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection