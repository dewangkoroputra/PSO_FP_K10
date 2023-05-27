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

        return redirect()->route('homepage')->with('success','Laporan Successful');
    }
}
