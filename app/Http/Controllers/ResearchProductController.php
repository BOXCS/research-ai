<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchProduct;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ResearchProductController extends Controller
{
    public function index()
    {
        $products = ResearchProduct::with('category')->get();
        return view('admin.research-products.index', compact('products'));
    }

    public function create()
    {
        // Hanya ambil kategori yang bertipe 'research'
        $categories = Category::where('type', 'research')->get();
        return view('admin.research-products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:Active,Completed,On Hold',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
        ]);

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
        $categories = Category::where('type', 'research')->get();
        return view('admin.research-products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = ResearchProduct::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:Active,Completed,On Hold',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
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

        if ($product->image) {
            $imagePath = str_replace('/storage/', '', $product->image);
            Storage::disk('public')->delete($imagePath);
        }

        $product->delete();

        return redirect()->route('research-products.index')
            ->with('success', 'Research product deleted successfully.');
    }
}
