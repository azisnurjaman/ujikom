<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\UserController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $response =[
            'suscces'=>true,
            'data'=>$user,
            'massage'=>'berhasil'
        ];
        return response()->json($response,200); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $response =[
            'suscces'=>true,
            'data'=>$user,
            'massage'=>'berhasil'
        ];
        return response()->json($response,200); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save;

        $role = Role::where('name','superadmin')->first();
        $user->attachRole($role);

        return response()->json('berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFaill($id);
        $response =[
            'suscces'=>true,
            'data'=>$user,
            'massage'=>'berhasil'
        ];
        return response()->json($response,200); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFaill($id);
        $response =[
            'suscces'=>true,
            'data'=>$user,
            'massage'=>'berhasil'
        ];
        return response()->json($response,200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFaill($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save;

        $role = Role::where('name','superadmin')->first();
        $user->attachRole($role);

        return response()->json('berhasil');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFaill($id);
        $user->delete();
            $response = [
            'success' =>true,
            'data' => $user,
            'massage' =>'berhasil. menghapus'
        ];
        return response()->json($response,200);
    }
}
