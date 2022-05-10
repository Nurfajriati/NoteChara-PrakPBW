<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SinopsisController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel notesinopsis
        $sinopsis= DB::table('notesinopsis')->get();

        // mengirim ke halaman done untuk ditampilkan data
        return view('done',['notesinopsis'=>$sinopsis]);
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

        return redirect('/Done');
    }

    public function edit($judul)
    {
        #ambil data berdasarkan judul
        $sinopsis = DB::table('notesinopsis')->where('judul', $judul)->get();

        #passing data
        return view('edit', ['notesinopsis' => $sinopsis]);
    }

    public function update(Request $request)
    {
        DB::table('notesinopsis')->where('judul', $request->judul)->update([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
        ]);

        return redirect('/Done');
    }

    public function hapus($judul)
    {
        DB::table('notesinopsis')->where('judul', $judul)->delete();
        return redirect('/Done');
    }


}
