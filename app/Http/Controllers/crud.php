<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class crud extends Controller
{
    public function index(){
     $hasil = User::all();
     
     return view('lihatdata',['liat'=>$hasil]);
    }
    
}
