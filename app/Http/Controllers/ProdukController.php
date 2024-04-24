<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::orderBy('produk_id', 'DESC')->paginate(10);
        $title = 'Kelola Produk';
        return view('layouts.produk', compact('produk', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Kelola Produk';
        return view('layouts.produk-tambah', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $produk = Produk::create($data);
        $title = 'Kelola Produk';


        if ($produk) {
            Session::flash('status', 'success');
            Session::flash('message', 'Produk berhasil ditambahkan.');
        }
        return view('layouts.produk-tambah', compact('title'));



        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $title = 'Kelola Produk';
        return view('layouts.edit-produk', compact('title', 'produk'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $produk = Produk::findOrFail($id);
        $produk->update($data);

        if ($produk) {
            Session::flash('status', 'info');
            Session::flash('message', 'Produk berhasil diubah.');
        }
        return redirect('/produk');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        $title = 'Kelola Produk';

        if ($produk) {
            Session::flash('status', 'success');
            Session::flash('message', 'Produk berhasil dihapus.');
        }
        return redirect('/produk');
    }
}
