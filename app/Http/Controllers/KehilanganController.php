<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kehilangan;
use Illuminate\Http\RedirectResponse;


class KehilanganController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'kontak' => 'required',
            'jenisKendaraan'=> 'required',
            'model_kendaraan'=> 'required',
            'tahun_keluaran'=> 'required',
            'warna'=> 'required',
            'plat_nomor'=> 'required',
            'foto_kendaraan'=> 'required',
            'tanggal_kejadian'=> 'required',
            'waktu_kejadian'=> 'required',
        ]);
        //State photo
        $photo =$request->file('foto_kendaraan')->store('images');
        $nama_file = time()."_".$photo;
        //buat nentuin tujuan foldernya
        $tujuan_upload = 'lostphoto';

        kehilangan::create([
            'kontak'=> request('kontak'),
            'jenisKendaraan'=> request('jenisKendaraan'),
            'model_kendaraan'=> request('model_kendaraan'),
            'tahun_keluaran'=> request('tahun_keluaran'),
            'warna'=> request('warna'),
            'plat_nomor'=> request('plat_nomor'),
            'foto_kendaraan'=> $nama_file,
            'tanggal_kejadian'=> request('tanggal_kejadian'),
            'waktu_kejadian'=> request('waktu_kejadian')
        ]);
        session()->flash('success', 'Susu sapi');


        return view('homepage');
    }
    public function index()
    {
    /*
    $posts = Post::all();

    // Kirim data posting ke tampilan
    return view('pagemateri', compact('posts'));*/
}
}
