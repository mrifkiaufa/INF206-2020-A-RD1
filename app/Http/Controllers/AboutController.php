<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AboutController extends Controller
{
    public function index() {
        if(Auth::check()){
            if(Auth::user()->jenis == 'admin'){
                return redirect('/');
            }
            else{
                return view('contact.contact');
            }
        }
        else{
            return view('contact.contact');
        }
    }
}
