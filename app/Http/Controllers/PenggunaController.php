<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = DB::table('users_app')->latest('user_create')->get();
        $totalpengguna = DB::table('users_app')->count();
        $ditangguhkan = DB::table('users_app')->where('status_user', 2)->count();
        $dihapus = DB::table('users_app')->where('status_user', 0)->count();

        return view('pengguna.index', [
            'title' => 'Pengguna',
            "pengguna" => $pengguna,
            "totalpengguna" => $totalpengguna,
            "ditangguhkan" => $ditangguhkan,
            "dihapus" => $dihapus
        ]);
    }

    public function ditangguhkan()
    {
        $ditangguhkan = DB::table('users_app')->where('status_user', 2)->latest('user_create')->get();
        return view('pengguna.ditangguhkan.index', [
            "title" => "Pengguna",
            "ditangguhkan" => $ditangguhkan
        ]);
    }

    public function dihapus()
    {
        $dihapus = DB::table('users_app')->where('status_user', 0)->latest('user_create')->get();
        return view('pengguna.dihapus.index', [
            "title" => "Pengguna",
            "dihapus" => $dihapus
        ]);
    }
}
