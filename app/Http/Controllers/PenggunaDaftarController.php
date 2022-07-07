<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

date_default_timezone_set("Asia/Jakarta");

class PenggunaDaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = DB::table('users_app')->latest('user_create')->get();
        return view('pengguna.daftar.index', [
            'title' => 'Pengguna',
            "pengguna" => $pengguna
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.daftar.create', [
            "title" => "Pengguna"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
            'gender'    => 'required',
            'date'      => 'required',
            'email'     => 'required',
            'telepon'   => 'required',
            'password'  => 'required|min:8',
            'kota'      => 'required',
            'alamat'    => 'required',
            'hobi'      => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'bio'       => 'required|max:255',
            'nama_institusi' => 'required',
            'nama_perusahaan' => 'required',
            'merokok'   => 'required',
            'alkohol'   => 'required',
            'sedekah'   => 'required',
            'sholat'    => 'required',
            'nikah'     => 'required',
            'anak'      => 'required',
            'target'    => 'required',
            'tentang_nikah' => 'required',
            'tinggi'    => 'required',
            'berat'     => 'required',
            'hafalan'   => 'required',
            'bahasa'    => 'required'
        ]);

        // pembuatan id user
        $hasil = DB::table('users_app')->max('user_id');
        $idbaru = $hasil + 1;

        $tgl = date('Y-m-d H:i:s');
        $password = Hash::make($validateData['password']);

        DB::table('users_app')->insert([
            'user_id'           => $idbaru,
            'nama'              => $validateData['nama'],
            'jenis_kelamin'     => $validateData['gender'],
            'tgl_lahir'         => $validateData['date'],
            'email'             => $validateData['email'],
            'no_telp'           => $validateData['telepon'],
            'password'          => $password,
            'kota'              => $validateData['kota'],
            'pekerjaan'         => $validateData['pekerjaan'],
            'pendidikan'        => $validateData['pendidikan'],
            'bio'               => $validateData['bio'],
            'hobi'              => $validateData['hobi'],
            'foto'              => 'default.jpg',
            'alamat'            => $validateData['alamat'],
            'nama_institusi'    => $validateData['nama_institusi'],
            'nama_perusahaan'   => $validateData['nama_perusahaan'],
            'merokok'           => $validateData['merokok'],
            'alkohol'           => $validateData['alkohol'],
            'sedekah'           => $validateData['sedekah'],
            'shalat'            => $validateData['sholat'],
            'status_pernikahan' => $validateData['nikah'],
            'jumlah_anak'       => $validateData['anak'],
            'target_menikah'    => $validateData['target'],
            'pandangan_pernikahan'  => $validateData['tentang_nikah'],
            'tinggi_badan'      => $validateData['tinggi'],
            'berat_badan'       => $validateData['berat'],
            'hafalan'           => $validateData['hafalan'],
            'bahasa'            => $validateData['bahasa'],
            'status_user'       => 1,
            'user_create'       => $tgl,
            'user_edited'       => $tgl

        ]);

        return redirect('/pengguna/daftar')->with('success', 'Pengguna has ben added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('users_app')->where('user_id', $id)->first();

        // menentukan umur
        $now = Carbon::now();
        $b_day = Carbon::parse($detail->tgl_lahir);
        $umur = $b_day->diffInYears($now);

        return view('pengguna.daftar.detail', [
            "title" => "Pengguna",
            "detail" => $detail,
            "umur" => $umur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = DB::table('users_app')->where('user_id', $id)->first();
        return view('pengguna.daftar.edit', [
            "title" => "Pengguna",
            "pengguna" => $pengguna
        ]);
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
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
            'gender'    => 'required',
            'date'      => 'required',
            'email'     => 'required',
            'telepon'   => 'required',
            'password'  => 'required|min:8',
            'kota'      => 'required',
            'alamat'    => 'required',
            'hobi'      => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'bio'       => 'required|max:255',
            'nama_institusi' => 'required',
            'nama_perusahaan' => 'required',
            'merokok'   => 'required',
            'alkohol'   => 'required',
            'sedekah'   => 'required',
            'sholat'    => 'required',
            'nikah'     => 'required',
            'anak'      => 'required',
            'target'    => 'required',
            'tentang_nikah' => 'required',
            'tinggi'    => 'required',
            'berat'     => 'required',
            'hafalan'   => 'required',
            'bahasa'    => 'required'
        ]);
        $tgl = date('Y-m-d H:i:s');

        DB::table('users_app')->where('user_id', $id)->update([
            'nama'              => $validateData['nama'],
            'jenis_kelamin'     => $validateData['gender'],
            'tgl_lahir'         => $validateData['date'],
            'email'             => $validateData['email'],
            'no_telp'           => $validateData['telepon'],
            'password'          => $validateData['password'],
            'kota'              => $validateData['kota'],
            'pekerjaan'         => $validateData['pekerjaan'],
            'pendidikan'        => $validateData['pendidikan'],
            'bio'               => $validateData['bio'],
            'hobi'              => $validateData['hobi'],
            'foto'              => 'default.jpg',
            'alamat'            => $validateData['alamat'],
            'nama_institusi'    => $validateData['nama_institusi'],
            'nama_perusahaan'   => $validateData['nama_perusahaan'],
            'merokok'           => $validateData['merokok'],
            'alkohol'           => $validateData['alkohol'],
            'sedekah'           => $validateData['sedekah'],
            'shalat'            => $validateData['sholat'],
            'status_pernikahan' => $validateData['nikah'],
            'jumlah_anak'       => $validateData['anak'],
            'target_menikah'    => $validateData['target'],
            'pandangan_pernikahan'  => $validateData['tentang_nikah'],
            'tinggi_badan'      => $validateData['tinggi'],
            'berat_badan'       => $validateData['berat'],
            'hafalan'           => $validateData['hafalan'],
            'bahasa'            => $validateData['bahasa'],
            'user_edited'       => $tgl
        ]);

        return redirect('/pengguna/daftar')->with('success', 'Pengguna has ben updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = DB::table('users_app')->where('user_id', $id);
        $pengguna->delete();

        return redirect('/pengguna/daftar')->with('success', 'Pengguna has ben deleted');
    }

    public function ubahStatus(Request $request, $id)
    {
        $status = $request->get('status');
        $tgl = date('Y-m-d H:i:s');

        DB::table('users_app')->where('user_id', $id)->update([
            'status_user' => $status,
            'user_edited' => $tgl
        ]);

        return redirect('/pengguna/daftar')->with('success', 'Status pengguna telah di ubah');
    }
}
