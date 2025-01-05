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

    public function destroy($id): RedirectResponse
    {
        $campaign = Campaign::find($id);
        $campaign->delete();
        return redirect()->route('admin.manage-campaigns.index');
    }
}
