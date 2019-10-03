<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'peminjam_kode');
    }
    public function kartupendaftaran()
    {
        return $this->hasMany('App\KartuPendaftaran');
    }
}
