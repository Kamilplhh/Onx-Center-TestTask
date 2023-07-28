<?php

namespace App\Http\Controllers;

use App\Models\CarLoan;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetData($id) { 

        $Orders = OrderDetail::where('user_id', $id)->get();
        $Cars = CarLoan::where('user_id', $id)->get();

        return view('user', compact(['Cars', 'Orders']));
    }
}
