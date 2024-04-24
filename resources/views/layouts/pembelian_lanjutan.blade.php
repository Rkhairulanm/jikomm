@extends('main')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Pembelian Produk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="proses">
            @csrf
            <div class="card-body">
                {{-- @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ Session::get('message') }}</h5>
                    </div>
                @endif --}}
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama_produk }}</td>
                                <td>{{ $k->harga }}</td>
                                <td style="max-width: 50px">
                                    @csrf
                                    <input type="number" name="jumlah_{{ $k->produk_id }}[]" max="{{ $k->stok }}" required
                                        placeholder="Masukan Jumlah">
                                    {{-- <input type="checkbox" id="produk_{{ $k->id }}" name="selected_products[]"
                                    value="{{ $k->id }}"> --}}
                                </td>
                            </tr>
                        @endforeach
                </table>
                <div class="form-group mt-5">
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                        placeholder="Masukan Nama Pelanggan" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="notelpon" name="notelpon"
                        placeholder="Masukan No Telpon">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/produk" class="btn btn-danger float-right">Back</a>
            </div>
        </form>
    </div>
@endsection
