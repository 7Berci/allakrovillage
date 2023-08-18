<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotfoundController extends Controller
{
    public function show()
{
    return view('404');
}

}
