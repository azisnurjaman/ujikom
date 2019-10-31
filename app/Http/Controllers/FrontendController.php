<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class FrontendController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('content', compact('buku'));
    }

    public function ShowDetail($id)
    {
        $buku = Buku::findOrFail($id);
        return view('detail', compact('buku'));
    }
}
