<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $guraded;

    public function kamars()
    {
        return $this->hasMany('App\Models\Kamar', 'cabangs_id');
    }
}
