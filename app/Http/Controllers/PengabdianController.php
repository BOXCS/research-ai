<?php

namespace App\Http\Controllers;

use App\Models\CommunityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengabdianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communityPrograms = CommunityService::latest()->paginate(9);

        return view('community.index', compact('communityPrograms'));
    }
}
