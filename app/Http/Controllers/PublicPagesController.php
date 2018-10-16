<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function getIndex()
    {
        return view('front.pages.index');
    }
}
