<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        if(Auth::check()){
            if(Auth::user()->jenis == 'admin'){
                return view('admin.home');
            }
            else{
                return view('home.index');
            }
        }
        else{
            return view('home.index');
        }
    }
}
