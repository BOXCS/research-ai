<div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold mb-6">{{ isset($publication) ? 'Edit' : 'Create' }} Publication</h2>

    <form method="POST"
        action="{{ isset($publication) ? route('publications.update', $publication->id) : route('publications.store') }}">
        @csrf
        @if (isset($publication))
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

            @php
                $teamMembers = \App\Models\TeamMember::all();
            @endphp

            <div x-data="authorInput()" class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Authors</label>

                <!-- Dropdown Pilih dari Team -->
                <select x-model="selectedTeam" @change="addAuthorFromTeam"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm py-2 px-3">
                    <option value="">-- Pilih dari Tim --</option>
                    @foreach ($teamMembers as $member)
                        <option value="{{ $member->name }}">{{ $member->name }}</option>
                    @endforeach
                </select>

                <!-- Input Manual Guest -->
                <div class="flex mt-2 gap-2">
                    <input type="text" x-model="guestName" @keydown.enter.prevent="addGuest"
                        placeholder="Nama penulis tamu"
                        class="block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500">
                    <button type="button" @click="addGuest"
                        class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600">Tambah</button>
                </div>

                <!-- List Penulis -->
                <div class="mt-3 flex flex-wrap gap-2">
                    <template x-for="(author, index) in authors" :key="index">
                        <div class="flex items-center bg-gray-200 px-3 py-1 rounded-full text-sm">
                            <span x-text="author"></span>
                            <button type="button" @click="removeAuthor(index)"
                                class="ml-2 text-red-600 font-bold">x</button>
                        </div>
                    </template>
                </div>

                <!-- Hidden input untuk dikirim -->
                <input type="hidden" name="authors" :value="authors.join(', ')">

                @error('authors')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="journal" class="block text-sm font-medium text-gray-700">Journal</label>
                    <input type="text" name="journal" id="journal"
                        value="{{ old('journal', $publication->journal ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('journal')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                    <input type="number" name="year" id="year"
                        value="{{ old('year', $publication->year ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('year')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

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
                                {{ old('category_id', $publication->category_id ?? '') == $category->id ? 'selected' : '' }}>
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
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="volume" class="block text-sm font-medium text-gray-700">Volume</label>
                    <input type="text" name="volume" id="volume"
                        value="{{ old('volume', $publication->volume ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('volume')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="issue" class="block text-sm font-medium text-gray-700">Issue</label>
                    <input type="text" name="issue" id="issue"
                        value="{{ old('issue', $publication->issue ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('issue')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="pages" class="block text-sm font-medium text-gray-700">Pages</label>
                    <input type="text" name="pages" id="pages"
                        value="{{ old('pages', $publication->pages ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('pages')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="doi" class="block text-sm font-medium text-gray-700">DOI</label>
                    <input type="text" name="doi" id="doi"
                        value="{{ old('doi', $publication->doi ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('doi')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="pdf_url" class="block text-sm font-medium text-gray-700">PDF URL</label>
                    <input type="url" name="pdf_url" id="pdf_url"
                        value="{{ old('pdf_url', $publication->pdf_url ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('pdf_url')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="impact_factor" class="block text-sm font-medium text-gray-700">Impact Factor</label>
                    <input type="number" step="0.1" name="impact_factor" id="impact_factor"
                        value="{{ old('impact_factor', $publication->impact_factor ?? '') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('impact_factor')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="citation_count" class="block text-sm font-medium text-gray-700">Citation Count</label>
                    <input type="number" name="citation_count" id="citation_count"
                        value="{{ old('citation_count', $publication->citation_count ?? '') }}"
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
                <a href="{{ route('publications.index') }}"
                    class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mr-3 hover:bg-gray-300">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    {{ isset($publication) ? 'Update' : 'Create' }}
                </button>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    function authorInput() {
        return {
            authors: {!! json_encode(explode(', ', old('authors', $publication->authors ?? ''))) !!},
            selectedTeam: '',
            guestName: '',
    
            addAuthorFromTeam() {
                if (this.selectedTeam && !this.authors.includes(this.selectedTeam)) {
                    this.authors.push(this.selectedTeam);
                }
                this.selectedTeam = '';
            },
    
            addGuest() {
                const name = this.guestName.trim();
                if (name && !this.authors.includes(name)) {
                    this.authors.push(name);
                }
                this.guestName = '';
            },
    
            removeAuthor(index) {
                this.authors.splice(index, 1);
            }
        }
    }
    </script>
    

