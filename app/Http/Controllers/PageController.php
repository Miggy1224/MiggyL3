<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page6()
    {
        return view('pages.page6');
    }

    public function page7()
    {
        return view('pages.page7');
    }

    // Add more methods for additional pages
}