<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchProduct;
use Illuminate\Support\Facades\Storage;

class ResearchProductController extends Controller
{
    public function index()
    {
        $products = ResearchProduct::all();
        return view('admin.research-products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.research-products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'status' => 'required|in:Active,Completed,On Hold',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('research-products', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        ResearchProduct::create($validated);

        return redirect()->route('research-products.index')
            ->with('success', 'Research product created successfully.');
    }

    public function edit($id)
    {
        $product = ResearchProduct::findOrFail($id);
        return view('admin.research-products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = ResearchProduct::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'status' => 'required|in:Active,Completed,On Hold',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                $oldImage = str_replace('/storage/', '', $product->image);
                Storage::disk('public')->delete($oldImage);
            }

            $imagePath = $request->file('image')->store('research-products', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        $product->update($validated);

        return redirect()->route('research-products.index')
            ->with('success', 'Research product updated successfully.');
    }

    public function destroy($id)
    {
        $product = ResearchProduct::findOrFail($id);

        // Delete image if exists
        if ($product->image) {
            $imagePath = str_replace('/storage/', '', $product->image);
            Storage::disk('public')->delete($imagePath);
        }

        $product->delete();

        return redirect()->route('research-products.index')
            ->with('success', 'Research product deleted successfully.');
    }
}
