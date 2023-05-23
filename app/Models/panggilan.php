<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panggilan extends Model
{
    use HasFactory;
    protected $table = 'panggilan';
    protected $fillable = ['id', 'Calltime', 'user_id'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];

    public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
