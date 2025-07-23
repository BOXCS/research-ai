<div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold mb-6">{{ isset($team) ? 'Edit' : 'Create' }} Research team</h2>

    <form method="POST"
        action="{{ isset($team) ? route('team-member.update', $team->id) : route('team-member.store') }}"
        enctype="multipart/form-data">
        @csrf
        @if (isset($team))
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $team->name ?? '') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="position" class="block text-sm font-medium text-gray-700">Posisi</label>
                <input name="position" id="position" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('position', $team->position ?? '') }}</textarea>
                @error('position')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="specialization" class="block text-sm font-medium text-gray-700">Spesialisasi</label>
                    <input name="specialization" id="specialization" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('specialization', $team->specialization ?? '') }}</textarea>
                    @error('specialization')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="education" class="block text-sm font-medium text-gray-700">Pendidikan</label>
                    <input name="education" id="education" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('education', $team->education ?? '') }}</textarea>
                    @error('education')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-700">Pengalaman</label>
                    <div class="flex gap-2 items-center mt-1">
                        <!-- Input tahun -->
                        <input type="number" name="experience_years" min="0" max="100"
                            class="w-20 border border-gray-300 rounded-md py-2 px-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('experience_years', isset($team) ? preg_replace('/[^0-9]/', '', $team->experience) : '') }}">
                        
                        <!-- Teks tetap -->
                        <span class="text-gray-700">tahun di</span>
                        
                        <!-- Input bidang/lokasi -->
                        <input type="text" name="experience_field"
                            class="flex-1 border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('experience_field', isset($team) ? trim(preg_replace('/^[0-9]+ tahun di /', '', $team->experience)) : '') }}">
                    </div>
                
                    @error('experience_years')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('experience_field')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input name="email" id="email" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('email', $team->email ?? '') }}</textarea>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="linkedin" class="block text-sm font-medium text-gray-700">Linkedin</label>
                    <input name="linkedin" id="linkedin" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('linkedin', $team->linkedin ?? '') }}</textarea>
                    @error('linkedin')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="google_scholar" class="block text-sm font-medium text-gray-700">Google Scholar</label>
                    <input name="google_scholar" id="google_scholar" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('google_scholar', $team->google_scholar ?? '') }}</textarea>
                    @error('google_scholar')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="publications" class="block text-sm font-medium text-gray-700">Publikasi</label>
                    <input name="publications" id="publications" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('publications', $team->publications ?? '') }}</textarea>
                    @error('publications')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="h_index" class="block text-sm font-medium text-gray-700">H-Index</label>
                    <input name="h_index" id="h_index" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('h_index', $team->h_index ?? '') }}</textarea>
                    @error('h_index')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                @if (isset($team) && $team->image)
                    <div class="mt-2">
                        <img src="{{ asset($team->image) }}" alt="Current Image" class="h-32 w-auto">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea name="bio" id="bio" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('bio', $team->bio ?? '') }}</textarea>
                @error('bio')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('team-member.index') }}"
                    class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mr-3 hover:bg-gray-300">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    {{ isset($team) ? 'Update' : 'Create' }}
                </button>
            </div>
        </div>
    </form>
</div>
