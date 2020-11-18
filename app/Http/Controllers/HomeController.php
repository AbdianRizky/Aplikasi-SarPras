<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class HomeController extends Controller
{
    public function index()
    {
        // Alert::success('adon', 'selamat datang');
        alert()->success('hooray');
        return view('app.home');
    }
}
