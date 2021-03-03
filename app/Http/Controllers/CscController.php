<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CscController extends Controller
{
    //
    public function index()
    {
        return view('csc.cscview');
    }
}
