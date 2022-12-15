<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function __construct()
    {
        // ini agar setiap mau akses controller ini, hanya yang sudah Login saja.
        $this->middleware('auth');
    }


    public function index()
    {
        return view('pages.dashboard');
    }

}
