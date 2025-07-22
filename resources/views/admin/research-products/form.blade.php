<div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold mb-6">{{ isset($product) ? 'Edit' : 'Create' }} Research Product</h2>

    <form method="POST"
        action="{{ isset($product) ? route('research-products.update', $product->id) : route('research-products.store') }}"
        enctype="multipart/form-data">
        @csrf
        @if (isset($product))
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 gap-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $product->title ?? '') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('description', $product->description ?? '') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    <select name="category_id" id="category_id"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    @error('category')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="Active"
                            {{ old('status', $product->status ?? '') == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Completed"
                            {{ old('status', $product->status ?? '') == 'Completed' ? 'selected' : '' }}>Completed
                        </option>
                        <option value="On Hold"
                            {{ old('status', $product->status ?? '') == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                    </select>
                    @error('status')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tgl_mulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" id="tgl_mulai"
                        value="{{ old('tgl_mulai', isset($product) ? $product->tgl_mulai->format('Y-m-d') : '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('tgl_mulai')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="tgl_selesai" class="block text-sm font-medium text-gray-700">Tanggal Selesai</label>
                    <input type="date" name="tgl_selesai" id="tgl_selesai"
                        value="{{ old('tgl_selesai', isset($product) ? $product->tgl_selesai->format('Y-m-d') : '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('tgl_selesai')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                @if (isset($product) && $product->image)
                    <div class="mt-2">
                        <img src="{{ asset($product->image) }}" alt="Current Image" class="h-32 w-auto">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="video_url" class="block text-sm font-medium text-gray-700">Video URL (Optional)</label>
                <input type="url" name="video_url" id="video_url"
                    value="{{ old('video_url', $product->video_url ?? '') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('video_url')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('research-products.index') }}"
                    class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mr-3 hover:bg-gray-300">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    {{ isset($product) ? 'Update' : 'Create' }}
                </button>
            </div>
        </div>
    </form>
</div>
