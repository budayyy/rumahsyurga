<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('konsultasi.index', [
            "title" => "Konsultasi"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function transaksi()
    {
        $transaksi = DB::table('master_konsultasi')->get();
        return view('konsultasi.transaksi', [
            "title" => "Konsultasi",
            "transaksi" => $transaksi
        ]);
    }

    public function konsultasi_detail($id)
    {
        $konsulTransaksi = DB::table('master_konsultasi')->where('konsul_id', $id)->first();
        return view('konsultasi.transaksi-detail', [
            "title" => "Konsultasi",
            "data" => $konsulTransaksi
        ]);
    }

    public function pertemuan()
    {
        return view('konsultasi.pertemuan', [
            "title" => "Konsultasi"
        ]);
    }

    public function pertemuan_detail()
    {
        return view('konsultasi.pertemuan-detail', [
            "title" => "Konsultasi"
        ]);
    }
}
