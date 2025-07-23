<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = TeamMember::all();
        return view('admin.team-member.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Gabungkan pengalaman menjadi satu string sebelum validasi
        $request->merge([
            'experience' => $request->input('experience_years') . ' tahun di ' . $request->input('experience_field')
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'education' => 'required|string',
            'experience' => 'required|string|max:255', // Ubah ke string, karena formatnya sekarang seperti "3 tahun di AI Development"
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'required|string',
            'email' => 'required|email|max:255',
            'linkedin' => 'nullable|url|max:255',
            'google_scholar' => 'nullable|url|max:255',
            'publications' => 'nullable|integer|min:0',
            'h_index' => 'nullable|numeric|min:0',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team-member', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        TeamMember::create($validated);

        return redirect()->route('team-member.index')
            ->with('success', 'Team Member created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = TeamMember::findOrFail($id);
        return view('admin.team-member.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = TeamMember::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'education' => 'required|string',
            'experience' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'required|string',
            'email' => 'required|email|max:255',
            'linkedin' => 'nullable|url|max:255',
            'google_scholar' => 'nullable|url|max:255',
            'publications' => 'nullable|integer|min:0',
            'h_index' => 'nullable|numeric|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) {
                $oldImage = str_replace('/storage/', '', $team->image);
                Storage::disk('public')->delete($oldImage);
            }

            $imagePath = $request->file('image')->store('team-member', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        $team->update($validated);

        return redirect()->route('team-member.index')
            ->with('success', 'Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = TeamMember::findOrFail($id);

        if ($team->image) {
            $imagePath = str_replace('/storage/', '', $team->image);
            Storage::disk('public')->delete($imagePath);
        }

        $team->delete();

        return redirect()->route('team-member.index')
            ->with('success', 'Team deleted successfully.');
    }
}
