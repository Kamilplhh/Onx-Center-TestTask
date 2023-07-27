<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function GetUsers() {
          
        $Users = User::All();
        
        return view('home', compact(['Users']));
    }
}
