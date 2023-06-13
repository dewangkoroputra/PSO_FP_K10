<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kehilangan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

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
            'lokasi_kejadian'=> 'required',
            'user_id'=>'required',
        ]);
        //State Variable
        $photo =$request->file('foto_kendaraan')->store('images');
        $nama_file =$request->file('foto_kendaraan')->getClientOriginalName();
        $phpdate = strtotime( $request['tanggal_kejadian'] );
        $mysqldate = date( 'Y-m-d', $phpdate );
        $uploadDir = 'public/uploads';
        $path = $request ->file('foto_kendaraan')->storeAs($uploadDir,$nama_file);
        $userid = auth()->user()->id;


        kehilangan::create([
            'kontak'=> request('kontak'),
            'jenisKendaraan'=> request('jenisKendaraan'),
            'model_kendaraan'=> request('model_kendaraan'),
            'tahun_keluaran'=> request('tahun_keluaran'),
            'warna'=> request('warna'),
            'plat_nomor'=> request('plat_nomor'),
            'foto_kendaraan'=> $nama_file,
            'tanggal_kejadian'=> $mysqldate,
            'waktu_kejadian'=> request('waktu_kejadian'),
            'lokasi_kejadian'=> request('lokasi_kejadian'),
            'deskripsi' => request('deskripsi'),
            'user_id'=> $userid,

        ]);

        return view('kehilangan-success');
    }

    public function index()
    {
        //
        $post = kehilangan::all();

        // Kirim data posting ke tampilan
        return view('homepage-tailwind', compact('post'));
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

    public function show(string $id): View
    {
        //get post by ID
        $post = kehilangan::findOrFail($id);

        //render view with post
        return view('detail-laporan', compact('post'));

    }

    public function sortByJenis($jenis)
    {
        $post = kehilangan::where('jenisKendaraan', $jenis)->get();

        return view('homepage-tailwind', compact('post'));
    }


}
