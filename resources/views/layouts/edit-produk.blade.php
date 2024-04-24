@extends('main')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Produk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post">
            @csrf
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ Session::get('message') }}</h5>

                    </div>
                @endif
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                        placeholder="Masukan Nama Produk" required value="{{ $produk->nama_produk }}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga"
                        required value="{{ $produk->harga }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukan Stok"
                        required value="{{ $produk->stok }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer justify-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/produk" class="btn btn-danger float-right">Back</a>
            </div>
        </form>
    </div>
@endsection
