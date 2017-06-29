<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function newsletter()
    {
        return view('pages.newsletter');
    }
}
