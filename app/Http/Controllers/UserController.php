<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Session;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function json()
    {
        return Datatables::of(User::all())->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $role = Role::all();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "berhasil menampilkan"
        ]);
        return view('backend.user.index', compact('user', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $role = Role::where('name', 'superadmin')->first();
        $user->attachRole($role);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        // if (!$user) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'gagal menampilkan',
        //         'massage' => 'data tidak di temukan'
        //     ];
        //     return response()->json($response, 404);
        // }
        // $response = [
        //     'success' => true,
        //     'data' => $user,
        //     'massage' => 'berhasil menampilkan.'
        // ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "berhasil menampilkan"
        ]);
        return view('backend.user.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $role = Role::where('name', 'peminjam')->first();
        $user->attachRole($role);

        return response()->json('berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "berhasil menampilkan"
        ]);
        return response()->json($response, 200);

    }
}
