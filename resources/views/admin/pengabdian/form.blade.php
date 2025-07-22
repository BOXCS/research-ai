<div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold mb-6">{{ isset($pengabdian) ? 'Edit' : 'Create' }} Pengabdian Masyarakat</h2>

    <form method="POST" action="{{ isset($pengabdian) ? route('pengabdian.update', $pengabdian->id) : route('pengabdian.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($pengabdian))
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 gap-6">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $pengabdian->title ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="3"
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('description', $pengabdian->description ?? '') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                @if(isset($pengabdian) && $pengabdian->image)
                    <div class="mt-2">
                        <img src="{{ asset($pengabdian->image) }}" alt="Current Image" class="h-32 w-auto">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Target Audience -->
            <div>
                <label for="target_audience" class="block text-sm font-medium text-gray-700">Target Audiens</label>
                <input type="text" name="target_audience" id="target_audience" value="{{ old('target_audience', $pengabdian->target_audience ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('target_audience')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Date Range -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tgl_mulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" id="tgl_mulai"
                           value="{{ old('tgl_mulai', isset($pengabdian) ? $pengabdian->tgl_mulai->format('Y-m-d') : '') }}"
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('tgl_mulai')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="tgl_selesai" class="block text-sm font-medium text-gray-700">Tanggal Selesai</label>
                    <input type="date" name="tgl_selesai" id="tgl_selesai"
                           value="{{ old('tgl_selesai', isset($pengabdian) ? $pengabdian->tgl_selesai->format('Y-m-d') : '') }}"
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('tgl_selesai')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Participants and Location -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="participants" class="block text-sm font-medium text-gray-700">Jumlah Peserta</label>
                    <input type="number" name="participants" id="participants" value="{{ old('participants', $pengabdian->participants ?? '') }}"
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('participants')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                    <input type="text" name="location" id="location" value="{{ old('location', $pengabdian->location ?? '') }}"
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('location')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Date and Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-700">Durasi</label>
                    <input type="text" name="duration" id="duration"
                           value="{{ old('duration', isset($pengabdian) ? $pengabdian->duration ?? '' : '') }}"
                           readonly
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 bg-gray-100 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('duration')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="Completed" {{ old('status', $pengabdian->status ?? '') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Ongoing" {{ old('status', $pengabdian->status ?? '') == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                        <option value="Planned" {{ old('status', $pengabdian->status ?? '') == 'Planned' ? 'selected' : '' }}>Planned</option>
                    </select>
                    @error('status')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Impact -->
            <div>
                <label for="impact" class="block text-sm font-medium text-gray-700">Dampak</label>
                <textarea name="impact" id="impact" rows="3"
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('impact', $pengabdian->impact ?? '') }}</textarea>
                @error('impact')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-end">
                <a href="{{ route('pengabdian.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mr-3 hover:bg-gray-300">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    {{ isset($pengabdian) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    function hitungDurasi() {
        const startInput = document.getElementById('tgl_mulai');
        const endInput = document.getElementById('tgl_selesai');
        const durasiInput = document.getElementById('duration');

        const startDate = new Date(startInput.value);
        const endDate = new Date(endInput.value);

        if (!isNaN(startDate) && !isNaN(endDate) && endDate >= startDate) {
            const timeDiff = endDate - startDate;
            const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
            durasiInput.value = days + ' hari';
        } else {
            durasiInput.value = '';
        }
    }

    document.getElementById('tgl_mulai').addEventListener('change', hitungDurasi);
    document.getElementById('tgl_selesai').addEventListener('change', hitungDurasi);
</script>
