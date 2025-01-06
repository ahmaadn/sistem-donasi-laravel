<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DonateController extends Controller
{
    public function index(): View
    {
        $campaigns = Campaign::where('status', 'open')->get();
        return view('pages.donation', ['campaigns' => $campaigns]);
    }

    public function store(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('donate.index')->with('failed', 'Login terlebih dahulu untuk melakukan donasi');
        }

        $request->validate([
            'amount' => 'required|numeric|min:5000|max:1000000',
            'message' => 'required|string',
            'campaign' => 'required|numeric'
        ]);

        $campaign = Campaign::findOrFail($request->campaign);

        Donate::create([
            'amount' => $request->amount,
            'message' => $request->message,
            'campaign_id' => $campaign->id,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('donate.index')->with('success', 'Donasi telah berhasil');
    }

    public function show(): View
    {
        return view('pages.donation');
    }
}
