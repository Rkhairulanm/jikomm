@extends('main')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-xl py-2">Kelola Pelanggan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ Session::get('message') }}</h5>

                    </div>
                @endif
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan </th>
                            <th>alamat</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama_pelanggan }}</td>
                                <td>{{ $k->alamat }}</td>
                                <td>{{ $k->notelpon }}</td>
                                <td><a href="/produk-hapus/{{ $k->p }}" class="btn btn-danger"
                                        onclick="return confirm('Are You sure you want to Delete this product?')    ">Delete</a>
                                    <a href="/produk-edit/{{ $k->p }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    @endsection
