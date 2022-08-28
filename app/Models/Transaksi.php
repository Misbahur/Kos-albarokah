<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['kamars_id', 'users_id', 'banks_id', 'noinvoice', 'buktitf', 'jatuh_tempo', 'tanggal', 'status', 'harga', 'tanggal_sewa', 'lama_sewa'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamars_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function notifikasi()
    {
        return $this->hasOne(Transaksi::class, 'id', 'transaksis_id');
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'banks_id', 'id');
    }
}
