@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-0">Wellcome!</h3>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($books as $book)
                            <tr>
                                <td>jumlah buku</td>
                                <td>{{ $no++ }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </div>
            </div>
        </div>
    </div>
@stop
