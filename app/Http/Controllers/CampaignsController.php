<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CampaignsController extends Controller
{
    public function index(): View
    {
        return view("pages.campaigns.index", ['campaigns' => Campaign::all()]);
    }

    public function create(): View
    {
        return view('pages.campaigns.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'deadline' => 'required|date|after:today',
            'goal' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            // Simpan gambar di folder storage/app/public/campaigns
            $imagePath = $request->file('image')->store('campaigns', 'public');
            // URL dari gambar
            $imagePath = asset('storage/' . $imagePath);
        }

        // Buat campaign baru
        $campaign = Campaign::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'deadline' => $request->deadline,
            'goal' => $request->goal,
            'collected' => 0,
            'status' => 'open',
            'created_by' => auth()->user()->id
        ]);

        return redirect()->route('admin.manage-campaigns.index')->with('success', 'Campaign created successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $campaign = Campaign::find($id);
        $campaign->delete();
        return redirect()->route('admin.manage-campaigns.index');
    }
}
