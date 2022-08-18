<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['cabangs_id', 'kode', 'harga', 'panjang', 'lebar', 'deskripsi', 'status'];

    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'cabangs_id', 'id');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id', 'kamars_id');
    }
    public function gambarkos()
    {
        return $this->hasMany(Gambarkos::class, 'id', 'kamars_id');
    }
}
