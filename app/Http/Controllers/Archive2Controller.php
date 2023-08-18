<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Archive2Controller extends Controller
{
    public function show()
    {
        return view('archive-list');
    }
}
