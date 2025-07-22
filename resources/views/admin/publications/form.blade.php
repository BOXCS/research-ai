<div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold mb-6">{{ isset($publication) ? 'Edit' : 'Create' }} Publication</h2>

    <form method="POST" action="{{ isset($publication) ? route('publications.update', $publication->id) : route('publications.store') }}">
        @csrf
        @if(isset($publication))
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 gap-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $publication->title ?? '') }}" 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="authors" class="block text-sm font-medium text-gray-700">Authors</label>
                <input type="text" name="authors" id="authors" value="{{ old('authors', $publication->authors ?? '') }}" 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('authors')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="journal" class="block text-sm font-medium text-gray-700">Journal</label>
                    <input type="text" name="journal" id="journal" value="{{ old('journal', $publication->journal ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('journal')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                    <input type="number" name="year" id="year" value="{{ old('year', $publication->year ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('year')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <input type="text" name="category" id="category" value="{{ old('category', $publication->category ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('category')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="volume" class="block text-sm font-medium text-gray-700">Volume</label>
                    <input type="text" name="volume" id="volume" value="{{ old('volume', $publication->volume ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('volume')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="issue" class="block text-sm font-medium text-gray-700">Issue</label>
                    <input type="text" name="issue" id="issue" value="{{ old('issue', $publication->issue ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('issue')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="pages" class="block text-sm font-medium text-gray-700">Pages</label>
                    <input type="text" name="pages" id="pages" value="{{ old('pages', $publication->pages ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('pages')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="doi" class="block text-sm font-medium text-gray-700">DOI</label>
                    <input type="text" name="doi" id="doi" value="{{ old('doi', $publication->doi ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('doi')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="pdf_url" class="block text-sm font-medium text-gray-700">PDF URL</label>
                    <input type="url" name="pdf_url" id="pdf_url" value="{{ old('pdf_url', $publication->pdf_url ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('pdf_url')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="impact_factor" class="block text-sm font-medium text-gray-700">Impact Factor</label>
                    <input type="number" step="0.1" name="impact_factor" id="impact_factor" value="{{ old('impact_factor', $publication->impact_factor ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('impact_factor')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="citation_count" class="block text-sm font-medium text-gray-700">Citation Count</label>
                    <input type="number" name="citation_count" id="citation_count" value="{{ old('citation_count', $publication->citation_count ?? '') }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('citation_count')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="abstract" class="block text-sm font-medium text-gray-700">Abstract</label>
                <textarea name="abstract" id="abstract" rows="5" 
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('abstract', $publication->abstract ?? '') }}</textarea>
                @error('abstract')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('publications.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mr-3 hover:bg-gray-300">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    {{ isset($publication) ? 'Update' : 'Create' }}
                </button>
            </div>
        </div>
    </form>
</div>