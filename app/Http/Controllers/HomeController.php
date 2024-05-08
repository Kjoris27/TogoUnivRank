<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\University;

class HomeController extends Controller
{
    //
    public function index() {
        $universities = University::all();

        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if($usertype=='user') {
                return view('dashboard',compact('universities'));
            }

            elseif ($usertype=='admin') {
                return view('admin.adminHome', compact('universities'));
            }

            else
            {
                return redirect()->back();
            }
        }

    }

    public function index1(){
        return view('admin.postblog');
    }
}
