<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DonateController extends Controller
{
    public function index(): View
    {
        return view('pages.donation');
    }
}