<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Gambarkos extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['kamars_id', 'gambar'];

     public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamars_id', 'id');
    }
}
