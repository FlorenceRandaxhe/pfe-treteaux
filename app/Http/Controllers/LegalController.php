<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function rgpd()
    {
        return view('pages.legal');
    }

    public function legal()
    {
        return view('pages.legal');
    }
}
