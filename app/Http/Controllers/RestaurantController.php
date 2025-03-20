<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('layout.app'); // Chỉ cần trả về đúng view có sẵn
    }
 
    
}
