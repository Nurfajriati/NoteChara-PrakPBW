<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SinopsisController extends Controller
{
    public function readdata()
    {
        $select = DB::table('notechara')
            ->select('nama', 'gender', 'watak', 'latarbelakang')
            ->get();
        $select = json_decode($select, true);

        $sinopsis = DB::table('notesinopsis')
            ->select('judul', 'sinopsis')
            ->get();
        $sinopsis = json_decode($sinopsis, true);

        return view('done', [
            'selectN' => $select,
            'sinopsis' => $sinopsis,
        ]);
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
        $editSinopsis = DB::table('notesinopsis')
            ->select('judul', 'sinopsis')
            ->where('judul', $judul)
            ->get();
        $editSinopsis = json_decode($editSinopsis, true);
        #passing data
        return view('edit', [
            'notesinopsis' => $editSinopsis,
            'judul' => $judul,
        ]);
    }

    public function update(Request $request)
    {
        DB::table('notesinopsis')
            ->where('judul', $request->judul)
            ->update([
                'judul' => $request->judul,
                'sinopsis' => $request->sinopsis,
            ]);

        return redirect('/Done');
    }

    public function hapus($judul)
    {
        DB::table('notesinopsis')
            ->where('judul', $judul)
            ->delete();
        return redirect('/Done');
    }
}
