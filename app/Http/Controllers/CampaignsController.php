<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CampaignsController extends Controller
{
    public function index(): View
    {
        return view("pages.campaigns.index", ['campaigns' => Campaign::all()]);
    }
}
