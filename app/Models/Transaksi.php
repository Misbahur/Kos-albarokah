<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guraded;

    public function kamars()
    {
        return $this->belongsTo('App\Models\Kamar', 'kamars_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }
}
