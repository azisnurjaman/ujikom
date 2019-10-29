<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Petugas extends Model
{
    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'petugas_kode');
    }
    public function kartupendaftaran()
    {
        return $this->hasMany('App\KartuPendaftaran', 'petugas_kode');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($petugas) {
            //mengecek apakah petugas masih digunakan oleh buku
            if ($petugas->peminjaman->count() > 0) {
                //pesan error
                Session::flash('error', [
                    "level" => "danger",
                ]);
                return false;
            } elseif ($petugas->kartupendaftaran->count() > 0) {
                Session::flash('error', [
                    "level" => "danger",
                ]);
                return false;
            }
        });
    }
}
