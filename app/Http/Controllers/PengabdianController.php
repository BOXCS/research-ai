<?php

namespace App\Http\Controllers;

use App\Models\PengabdianMasyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengabdianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengabdian = PengabdianMasyarakat::all();
        return view('admin.pengabdian.index', compact('pengabdian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengabdian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
            'target_audience' => 'required|string|max:255',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'participants' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'status' => 'required|in:Completed,Ongoing,Planned',
            'impact' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pengabdian', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        PengabdianMasyarakat::create($validated);

        return redirect()->route('pengabdian.index')
            ->with('success', 'Pengabdian Masyarakat created successfully.');
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
        $pengabdians = PengabdianMasyarakat::findOrFail($id);
        return view('admin.pengabdian.edit', compact('pengabdians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengabdians = PengabdianMasyarakat::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
            'target_audience' => 'required|string|max:255',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'participants' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'status' => 'required|in:Completed,Ongoing,Planned',
            'impact' => 'required|string',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($pengabdians->image) {
                $oldImage = str_replace('/storage/', '', $pengabdians->image);
                Storage::disk('public')->delete($oldImage);
            }

            $imagePath = $request->file('image')->store('pengabdian', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        $pengabdians->update($validated);

        return redirect()->route('pengabdian.index')
            ->with('success', 'Research product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
