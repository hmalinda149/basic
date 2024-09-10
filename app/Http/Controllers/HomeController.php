<?php

namespace App\Http\Controllers;


use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function redirect()
    {
        $utype=Auth::user()->userType;

        if($utype=='1')
        {
            return view('admin.index');
        }
        else
        {
            $data = Details::all();
            return view('home.index',compact('data'));
        }
    }

    
}
