@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Profil Akun</h1>
@stop
@section('content')
    <h1>ini anggap ada profil</h1>

    <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">Username</h5>
            <p class="card-text">Fullname</p>
        </div>
    </div>
@stop
