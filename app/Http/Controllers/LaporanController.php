<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index', [
            "title" => "Laporan"
        ]);
    }
    public function artikel()
    {
        return view('laporan.artikel.index', [
            "title" => "Laporan"
        ]);
    }
    public function wedding()
    {
        return view('laporan.wedding.index', [
            "title" => "Laporan"
        ]);
    }
    public function training()
    {
        return view('laporan.training.index', [
            "title" => "Laporan"
        ]);
    }
}
