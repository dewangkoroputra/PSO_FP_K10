<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kehilangan extends Model
{
    use HasFactory;
    protected $table = 'kehilangan';
    protected $fillable = ['kontak', 'jenisKendaraan', 'model_kendaraan','plat_nomor','tahun_keluaran','tanggal_kejadian','waktu_kejadian','warna','foto_kendaraan','deskripsi','lokasi_kejadian'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];
}
