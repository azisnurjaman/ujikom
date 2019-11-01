<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use Session;
use Yajra\Datatables\Datatables;

class PetugasController extends Controller
{
    public function json()
    {
        return Datatables::of(Petugas::all())->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "berhasil menampilkan"
        ]);
        return view('backend.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $petugas = new Petugas;
        $petugas->petugas_kode = $request->petugas_kode;
        $petugas->petugas_nama = $request->petugas_nama;
        $petugas->save();
        return redirect()->route('petugas.index')->with('success', 'Berhasil ditambah');;
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
        $petugas = Petugas::findOrFail($id);
        return view('backend.petugas.edit', compact('petugas'));
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
        $petugas = Petugas::findOrFail($id);
        $petugas->petugas_kode = $request->petugas_kode;
        $petugas->petugas_nama = $request->petugas_nama;
        $petugas->save();
        return redirect()->route('petugas.index')->with('edit', 'Berhasil diedit');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Petugas::destroy($id)) return redirect()->back();
        Session::flash("delete", [
        "level"=>"success",
        ]);
        return redirect()->route('petugas.index');
    }
}
