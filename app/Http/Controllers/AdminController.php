<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

date_default_timezone_set("Asia/Jakarta");

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('administrator')->get();
        $totalAdmin = DB::table('administrator')->count();
        $ditangguhkan = DB::table('administrator')->where('status_admin', 2)->count();
        $dihapus       = DB::table('administrator')->where('status_admin', 0)->count();
        return view('admin.index', [
            "title" => "Admin",
            "admin" => $admin,
            "totaladmin" => $totalAdmin,
            "ditangguhkan" => $ditangguhkan,
            "dihapus" => $dihapus
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
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required',
            'email'    => 'required',
            'phone'     => 'required',
            'password1' => 'required|min:5',
            'password2' => 'required|min:5',
            'role'      => 'required'
        ]);

        //pembuatan id admin
        $hasil = DB::table('administrator')->max('admin_id');
        $idbaru = $hasil + 1;

        $tgl = date('Y-m-d H:i:s');
        $password = Hash::make($validateData['password1']);

        DB::table('administrator')->insert([
            'admin_id' => $idbaru,
            'nama' => $validateData['nama'],
            'username' => $validateData['username'],
            'email'   => $validateData['email'],
            'phone' => $validateData['phone'],
            'password' => $password,
            'status_admin' => 1,
            "role_admin" => $validateData['role'],
            "date_created" => $tgl,
            "date_updated" => $tgl
        ]);

        return redirect()->back()->with('success', 'Admin has ben added!');
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
        $tgl = date('Y-m-d H:i:s');
        DB::table('administrator')->where('admin_id', $id)->update([
            'nama' => $request->get('nama'),
            'username' => $request->get('username'),
            'email'  => $request->get('email'),
            'phone' => $request->get('phone'),
            'role_admin' => $request->get('role')
        ]);

        return redirect()->back()->with('success', 'Admin has ben updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = DB::table('administrator')->where('admin_id', $id);
        $admin->delete();

        return redirect()->back()->with('success', 'Admin has ben Deleted!');
    }

    public function daftar()
    {
        $admin = DB::table('administrator')->get();

        return view('admin.daftar', [
            "title" => "Admin",
            "admin" => $admin
        ]);
    }

    public function ditangguhkan()
    {
        $ditangguhkan = DB::table('administrator')->where('status_admin', 2)->get();
        return view('admin.ditangguhkan', [
            "title" => "Admin",
            "ditangguhkan" => $ditangguhkan
        ]);
    }

    public function dihapus()
    {
        $dihapus = DB::table('administrator')->where('status_admin', 0)->get();
        return view('admin.hapus', [
            "title" => "Admin",
            "dihapus" => $dihapus
        ]);
    }

    public function ubahStatus(Request $request, $id)
    {
        $status = $request->get('status');
        $tgl = date('Y-m-d H:i:s');

        DB::table('administrator')->where('admin_id', $id)->update([
            'status_admin' => $status,
            'date_updated' => $tgl
        ]);

        return redirect()->back()->with('success', 'Status admin telah di ubah');
    }
}
