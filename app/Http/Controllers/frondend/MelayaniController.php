<?php

namespace App\Http\Controllers\frondend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MelayaniController extends Controller
{
    public function index()
    {
        return view('frondend.melayani');
    }

    public function show(){
        return view('frondend.melayansingle');
    }
}
