<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard'); // You can create a dashboard view or redirect elsewhere
    }
}
