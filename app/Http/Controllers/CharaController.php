<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CharaController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel notechara
        $chara= DB::table('notechara')->get();

        // mengirim ke halaman notechara untuk ditampilkan data
        return view('done',['notechara'=>$chara]);
    }

    public function input()
    {
        return view('inputc');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('notechara')->insert([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'watak'=> $request->watak,
            'latarbelakang'=> $request->latarbelakang,
        ]);

        return redirect('/Done');
    }

    public function edit($nama)
    {
        #ambil data berdasarkan nama
        $chara = DB::table('notechara')->where('nama', $nama)->get();

        #passing data
        return view('edit', ['notechara' => $chara]);
    }

    public function update(Request $request)
    {
        DB::table('notechara')->where('nama', $request->nama)->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'watak'=> $request->watak,
            'latarbelakang'=> $request->latarbelakang,
        ]);

        return redirect('/Done');
    }

    public function hapus($nama)
    {
        DB::table('notechara')->where('nama', $nama)->delete();
        return redirect('/Done');
    }


}
