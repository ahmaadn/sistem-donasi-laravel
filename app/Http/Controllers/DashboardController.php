<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $donations = Donate::where('user_id', auth()->user()->id)->take(5)->get();
        return view("pages.dashboard.index", ['donations' => $donations]);
    }
}
