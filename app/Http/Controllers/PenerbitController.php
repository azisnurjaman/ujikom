<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;
use Yajra\Datatables\Datatables;
use Session;

class PenerbitController extends Controller
{
    public function getIndex()
    {
        return view('penerbit.index');
    }
    public function anyData()
    {
        return Datatables::of(Penerbit::query())->make(true);
    }

    public function json()
    {
        return Datatables::of(Penerbit::all())->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('backend.penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //  $request->validate([
            //     'penerbit_kode' => 'required|unique:penerbit',
            //     'penerbit_nama' => 'required'
            // ]);
        $penerbit = new Penerbit;
        $penerbit->penerbit_kode = $request->penerbit_kode;
        $penerbit->penerbit_nama = $request->penerbit_nama;
        $penerbit->penerbit_alamat = $request->penerbit_alamat;
        $penerbit->penerbit_tlpn = $request->penerbit_telp;
        $penerbit->save();
        return redirect()->route('penerbit.index')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('backend.penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('backend.penerbit.edit', compact('penerbit'));
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
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->penerbit_kode = $request->penerbit_kode;
        $penerbit->penerbit_nama = $request->penerbit_nama;
        $penerbit->penerbit_alamat = $request->penerbit_alamat;
        $penerbit->penerbit_tlpn = $request->penerbit_telp;
        $penerbit->save();
        return redirect()->route('penerbit.index')->with('edit', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Penerbit::destroy($id)) return redirect()->back();
        Session::flash("delete", [
        "level"=>"success",
        ]);
        return redirect()->route('penerbit.index');
    }
}
