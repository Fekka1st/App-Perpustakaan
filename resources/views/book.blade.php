@extends('adminlte::page')
@section('title','Home Page')
@section('content_header')
<h1>Data Buku</h1>
@stop
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">{{__('Pengelolaan Buku')}}</div>
    <div class="card-body">
        <table id="table-data" class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>Cover</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach ($books as $book)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$book->judul}}</td>
                    <td>{{$book->penulis}}</td>
                    <td>{{$book->tahun}}</td>
                    <td>{{$book->penerbit}}</td>
                    <td>
                        @if($book->cover !== null)
                        <img src="{{asset('storage/cover_buku/'.$book->cover)}}" width="100px"/>
                        @else
                        [gambar tidak tersedia] 
                        @endif
                    </td>
                    <td></td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection