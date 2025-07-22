<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        return view('admin.publications.index', compact('publications'));
    }

    public function create()
    {
        return view('admin.publications.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'authors' => 'required|string',
            'journal' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'volume' => 'required|string|max:50',
            'issue' => 'required|string|max:50',
            'pages' => 'required|string|max:50',
            'doi' => 'required|string|max:255',
            'impact_factor' => 'required|numeric|min:0',
            'citation_count' => 'required|integer|min:0',
            'abstract' => 'required|string',
            'pdf_url' => 'required|url',
            'category' => 'required|string|max:255',
        ]);

        Publication::create($validated);

        return redirect()->route('publications.index')
                         ->with('success', 'Publication created successfully.');
    }

    public function edit($id)
    {
        $publication = Publication::findOrFail($id);
        return view('admin.publications.edit', compact('publication'));
    }

    public function update(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'authors' => 'required|string',
            'journal' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'volume' => 'required|string|max:50',
            'issue' => 'required|string|max:50',
            'pages' => 'required|string|max:50',
            'doi' => 'required|string|max:255',
            'impact_factor' => 'required|numeric|min:0',
            'citation_count' => 'required|integer|min:0',
            'abstract' => 'required|string',
            'pdf_url' => 'required|url',
            'category' => 'required|string|max:255',
        ]);

        $publication->update($validated);

        return redirect()->route('publications.index')
                         ->with('success', 'Publication updated successfully.');
    }

    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();

        return redirect()->route('publications.index')
                         ->with('success', 'Publication deleted successfully.');
    }
}