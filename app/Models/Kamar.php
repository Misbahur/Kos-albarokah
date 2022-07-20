<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $guraded;

    public function cabangs()
    {
        return $this->belongsTo('App\Models\Cabang', 'cabangs_id', 'id');
    }
    public function transaksis()
    {
        return $this->hasMany('App\Models\Transaksi', 'kamars_id');
    }
}
