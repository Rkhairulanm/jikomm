@extends('main')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title text-xl my-2">Pembelian</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ Session::get('message') }}</h5>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        @foreach ($errors->all() as $item)
                            <h5> {{ $item }}</h5>
                        @endforeach
                    </div>
                @endif
                <form action="/pembelian-lanjutan">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/pembelian-lanjutan" method="post">
                                @csrf
                                @foreach ($produk as $k)
                                    @if ($k->stok != 0)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->nama_produk }}</td>
                                            <td>{{ $k->harga }}</td>
                                            <td>
                                                <input type="checkbox" id="produk_{{ $k->produk_id }}" name="produk_id[]"
                                                    value="{{ $k->produk_id }}">
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </form>
                    </table>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    @endsection
