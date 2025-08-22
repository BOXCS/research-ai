<?php

namespace App\Http\Controllers;

use App\Models\ResearchProduct;

class ResearchController extends Controller
{
    public function index()
    {
        // ambil semua research (atau bisa paginate)
        $researchProducts = ResearchProduct::with('category')
            ->latest()
            ->paginate(9); // misalnya 9 per page

        return view('research.index', compact('researchProducts'));
    }
}
