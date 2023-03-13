<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data =  Auth::user();
        // dd($data->role_id);
        if ($data->role_id == 1) {
            return redirect('admindashbord');
        } else {
            return view('home');
        }
    }
}
