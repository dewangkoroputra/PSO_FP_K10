<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class panggilan extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $table = 'panggilan';
    protected $fillable = [ 'Calltime', 'user_id'];
    protected $primarykey = ['id'];
    protected $guarded = ['id'];

    public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
