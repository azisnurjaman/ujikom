<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Penerbit extends Model
{
    public function buku()
    {
        return $this->hasMany('App\Buku', 'penerbit_kode');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($penerbit) {
            //mengecek apakah penerbit masih digunakan oleh buku
            if ($penerbit->buku->count() > 0) {
                //pesan error
                Session::flash('error', [
                    "level" => "danger",
                ]);
                return false;
            }
        });
    }
}
