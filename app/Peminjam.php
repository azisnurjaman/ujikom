<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Peminjam extends Model
{
    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'peminjam_kode');
    }
    public function kartupendaftaran()
    {
        return $this->hasMany('App\KartuPendaftaran', 'peminjam_kode');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function ($peminjam) {
            //mengecek apakah peminjam masih digunakan oleh buku
            if ($peminjam->peminjaman->count() > 0) {
                //pesan error
                Session::flash('error', [
                    "level" => "danger",
                ]);
                return false;
            }
            if ($peminjam->kartupendaftaran->count() > 0) {
                //pesan error
                Session::flash('error', [
                    "level" => "danger",
                ]);
                return false;
            }
        });
    }
}
