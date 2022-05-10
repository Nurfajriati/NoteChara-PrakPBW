<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SinopsisController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel mahasiswa
        $sin= DB::table('notesinopsis')->get();

        // mengirim ke halaman mahasiswa untuk ditampilkan data
        return view('sinopsis',['notesinopsis'=>$sin]);
    }

    public function input()
    {
        return view('inputs');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('notesinopsis')->insert([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
        ]);

        return redirect('/Sinopsis');
    }
}
