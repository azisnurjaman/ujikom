<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Laratrust::hasRole('Admin')) {
            return $this->adminDashboard();
        }
        if (Laratrust::hasRole('Peminjam')) {
            return $this->memberDashboard();
        }
        return view('home');
    }

    protected function adminDashboard()
    {
        return redirect('home');
    }
    protected function memberDashboard()
    {
        return redirect('home');
    }
}
