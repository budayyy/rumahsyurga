<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        return view('wedding.index', [
            "title" => "WO"
        ]);
    }

    public function transaksi()
    {
        return view('wedding.transaksi.index', [
            "title" => "WO"
        ]);
    }

    public function detail()
    {
        return view('wedding.transaksi.detail', [
            "title" => "WO"
        ]);
    }

    public function invoice()
    {
        return view('wedding.transaksi.invoice', [
            "title" => "WO"
        ]);
    }
}
