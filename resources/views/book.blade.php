@extends('adminlte::page')
@section('title', 'Home Page')
@section('content_header')
    <h1>Data Buku</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Pengelolaan Buku') }}</div>
            <div class="card-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">
                    <i class="fa fa-plus"></i>
                    Tambah Data
                </button>
                <hr />
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
                                <td>{{ $no++ }}</td>
                                <td>{{ $book->judul }}</td>
                                <td>{{ $book->penulis }}</td>
                                <td>{{ $book->tahun }}</td>
                                <td>{{ $book->penerbit }}</td>
                                <td>
                                    @if ($book->cover !== null)
                                        <img src="{{ asset('storage/cover_buku/' . $book->cover) }}" width="100px" />
                                    @else
                                        [gambar tidak tersedia]
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic Example">
                                        <button type="button" id="btn-edit-buku" class="btn btn-success"
                                            data-toggle="modal" data-target="#editBukuModal"
                                            data-id="{{ $book->id }}">Edit</button>
                                        <button type="button" id="btn-hapus-buku" class="btn btn-danger"
                                            data-toggle="modal" data-target="#hapusBukuModal"
                                            data-id="{{ $book->id }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- @endsection --}}

    <div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-labelledby="exampleModaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModaLabel">Tambah Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.book.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="year" class="form-control" name="tahun" id="tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="file" class="form-control" name="cover" id="cover" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editBukuModal" tabindex="-1" aria-labelledby="exampleModaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModaLabel">Edit Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.book.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="edit-judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="edit-judul" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-penulis">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="edit-penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-tahun">Tahun</label>
                            <input type="year" class="form-control" name="tahun" id="edit-tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="edit-penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-cover">Cover</label>
                            <input type="file" class="form-control" name="cover" id="edit-cover" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="edit-id">
                    <input type="hidden" name="old_cover" id="edit-old-cover">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@stop
