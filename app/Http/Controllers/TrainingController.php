<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{
    public function index()
    {
        $training = DB::table('master_training')->get();
        return view('training.index', [
            "title" => "Training",
            "training" => $training
        ]);
    }

    public function transaksi()
    {
        return view('training.transaksi.index', [
            "title" => "Training"
        ]);
    }

    public function detail()
    {
        return view('training.transaksi.detail', [
            "title" => "Training"
        ]);
    }

    public function invoice()
    {
        return view('training.transaksi.invoice', [
            "title" => "Training"
        ]);
    }
}
