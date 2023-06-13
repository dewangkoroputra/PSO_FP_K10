<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class kehilangan extends Model
{
    use HasFactory;
    protected $table = 'kehilangan';
    protected $fillable = ['kontak', 'jenisKendaraan', 'model_kendaraan','plat_nomor','tahun_keluaran','tanggal_kejadian','waktu_kejadian','warna','foto_kendaraan','deskripsi','lokasi_kejadian','user_id'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];

    public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
