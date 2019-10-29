<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Buku extends Model
{
    public function penerbit()
    {
        return $this->belongsTo('App\Penerbit', 'penerbit_kode');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_kode');
    }

    public function detail()
    {
        return $this->hasMany('App\DetailPinjam', 'buku_kode');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($buku) {
            //mengecek apakah buku masih digunakan oleh buku
            if ($buku->detail->count() > 0) {
                //pesan error
                Session::flash('error', [
                    "level" => "danger",
                ]);
                return false;
            }
        });
    }
}
