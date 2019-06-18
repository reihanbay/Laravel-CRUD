<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index()
    {
        $data_buku = \App\buku::all();
        return view('buku.index',['data_buku'=>$data_buku]);
    }

    public function create(Request $request)
    {
        \App\buku::create($request->all());
        return redirect ('/buku')->with('sukses','Data Berhasil di input');
    }
}
