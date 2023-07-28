<?php

namespace App\Http\Controllers;

use App\Models\CarLoan;
use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetData($id) { 

        $Orders = Order::where('user_id', $id)->get();
        $Cars = CarLoan::where('user_id', $id)->get();

        return view('user', compact(['Cars', 'Orders']));
    }
}
