<?php

namespace App\Http\Controllers;

use App\Models\ResearchProduct;
use App\Models\Publication;
use App\Models\CommunityProgram;   // ✅ tambahkan
use App\Models\CommunityService;
use App\Models\Team;               // ✅ misalnya untuk tim
use App\Models\TeamMember;

class LandingController extends Controller
{
    public function index()
    {
        // Produk terbaru (6 item)
        $researchProducts = ResearchProduct::with('category')
            ->latest()
            ->take(6)
            ->get();

        // Publikasi terbaru (6 item)
        $publications = Publication::with('category')
            ->latest()
            ->take(6)
            ->get();

        // Pengabdian masyarakat terbaru (6 item)
        $communityPrograms = CommunityService::latest()
            ->latest()
            ->take(6)
            ->get();

        // Tim terbaru (opsional)
        $teamMembers = TeamMember::orderBy('created_at', 'asc')
        ->get();


        return view('landing.index', compact(
            'researchProducts',
            'publications',
            'communityPrograms',
            'teamMembers'
        ));
    }
}
