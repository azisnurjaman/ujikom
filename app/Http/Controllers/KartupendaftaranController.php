<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KartuPendaftaran;
use App\Petugas;
use App\Peminjam;
use Auth;
use Yajra\Datatables\Datatables;

class KartupendaftaranController extends Controller
{
    public function json()
    {
        return Datatables::of(KartuPendaftaran::all())->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartupendaftaran = KartuPendaftaran::all();
        return view('backend.kartupendaftaran.index', compact('kartupendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = Petugas::all();
        $kartupendaftaran = KartuPendaftaran::all();
        $peminjam = Peminjam::all();
        // if (Auth::user()->id == ['role:admin']) {
        //     return view('backend.kartupendaftaran.create', compact('kartupendaftaran', 'petugas', 'peminjam'));
        // } else {
        //     return view('403');
        // }
        return view('backend.kartupendaftaran.create', compact('kartupendaftaran', 'petugas', 'peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kartupendaftaran = new KartuPendaftaran;
        $kartupendaftaran->kartupendaftaran_kode = $request->kartupendaftaran_kode;
        $kartupendaftaran->petugas_kode = $request->petugas_nama;
        $kartupendaftaran->peminjam_kode = $request->peminjam_nama;
        $kartupendaftaran->kartu_tanggal_akhir = $request->kartu_tgl_akhir;
        $kartupendaftaran->kartu_tanggal_pembuatan = $request->kartu_tgl_pembuatan;
        $kartupendaftaran->kartu_status_aktif = $request->kartu_status_aktif;
        $kartupendaftaran->save();
        return redirect()->route('kartupendaftaran.index')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::all();
        $kartupendaftaran = KartuPendaftaran::findOrFail($id);
        $peminjam = Peminjam::all();
        // if (Auth::user()->id == ['role:admin']) {
        //     
        // } else {
        //     return view('403');
        // }
        return view('backend.kartupendaftaran.edit', compact('kartupendaftaran', 'petugas', 'peminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kartupendaftaran = KartuPendaftaran::findOrFail($id);
        $kartupendaftaran->kartupendaftaran_kode = $request->kartupendaftaran_kode;
        $kartupendaftaran->petugas_kode = $request->petugas_nama;
        $kartupendaftaran->peminjam_kode = $request->peminjam_nama;
        $kartupendaftaran->kartu_tanggal_akhir = $request->kartu_tgl_akhir;
        $kartupendaftaran->kartu_tanggal_pembuatan = $request->kartu_tgl_pembuatan;
        $kartupendaftaran->kartu_status_aktif = $request->kartu_status_aktif;
        $kartupendaftaran->save();
        return redirect()->route('kartupendaftaran.index')->with('edit', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartupendaftaran = KartuPendaftaran::destroy($id);
        return redirect()->route('kartupendaftaran.index')->with('delete', 'Berhasil dihapus');
    }
}
