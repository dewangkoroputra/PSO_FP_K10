<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kehilangan;
use App\Models\User;

class JointController extends Controller
{
    function index()
    {
    	$data = kehilangan::join('users', 'kehilangan.user_id', '=', 'users.id')
              		->get(['users.name', 'users.id','users.email', 'kehilangan.kontak', 'kehilangan.jenisKendaraan','kehilangan.model_kendaraan','kehilangan.tahun_keluaran','kehilangan.warna','kehilangan.plat_nomor','kehilangan.foto_kendaraan','kehilangan.waktu_kejadian','kehilangan.tanggal_kejadian','kehilangan.deskripsi','kehilangan.lokasi_kejadian',]);

        return view('profil', compact('data'));
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $kehilangan = kehilangan::findOrFail($id);

        //delete image
        Storage::delete('storage/uploads/'.$kehilangan->foto_kendaraan);

        //delete post
        $kehilangan->delete();

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

