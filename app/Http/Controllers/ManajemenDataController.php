<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenDataController extends Controller
{
    public function index()
    {
        return view('manajemen');
    }
}
