@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-5"><b>Selamat Datang </b>karena yang datang mungkin tidak memberikan selamat </h3>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    @php $no=1; @endphp
                                    @foreach ($books as $book)
                                        <h3>{{ $no++ }}</h3>
                                        <p>Jumlah Buku</p>
                                    @endforeach
                                </div>
                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <a href="{{ route('admin.books') }}" class="small-box-footer">Ke list buku <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">


                                    <h3>{{ $user }}</h3>
                                    <p>Akun Staff</p>

                                </div>
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ke list Akun Staff <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
