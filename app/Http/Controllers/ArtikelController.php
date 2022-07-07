<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = DB::table('master_artikel')->get();
        return view('artikel.index', [
            "title" => "Artikel",
            "artikel" => $artikel
        ]);
    }

    public function transaksi()
    {
        return view('artikel.transaksi.index', [
            "title" => "Artikel"
        ]);
    }

    public function detail()
    {
        return view('artikel.transaksi.detail', [
            "title" => "Artikel"
        ]);
    }

    public function invoice()
    {
        return view('artikel.transaksi.invoice', [
            "title" => "Artikel"
        ]);
    }
}
