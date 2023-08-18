<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Archive1Controller extends Controller
{
    public function show()
    {
        return view('archive-grid');
    }
}
