<?php

namespace App\Http\Controllers;

use App\Akun;

use Illuminate\Http\Request;

class DataAkunController extends Controller
{
    //

    public function simpan(Request $request) {

        $data =  new Akun;

        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
       

        $data->save();

        


       

       
        $data =  Akun::all();
        return view('tampil', compact('data'));

       // return redirect('/')->with(['success' => 'Data  Berhasil Di simpan']);

    }
}
