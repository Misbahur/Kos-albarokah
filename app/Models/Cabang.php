<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nama', 'kategori', 'latitude', 'longitude'];

    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'id', 'cabangs_id');
    }
}
