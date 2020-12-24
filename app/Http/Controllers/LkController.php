<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkController extends Controller
{
    //
    public function index(Request $request)
    {

        return view('lk.index');
    }
}
