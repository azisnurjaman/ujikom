<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'petugas_kode');
    }
    public function kartupendaftaran()
    {
        return $this->hasMany('App\KartuPendaftaran');
    }
}
