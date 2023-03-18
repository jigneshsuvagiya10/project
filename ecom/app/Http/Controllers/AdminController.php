<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data =  Auth::user();
        // dd($data->role_id);
        if ($data->role_id == 1) {
            return view('admin.admindashbord');
        } else {
            return redirect('home');
        }
        // return view('admin.admindashbord'); // compact('products')
    }
}
