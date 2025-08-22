@extends('layouts.app')

@section('content')
<section class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-emerald-900 mb-12 text-center">
            Community Programs
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($communityPrograms as $program)
                <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg overflow-hidden border border-white/60 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-52">
                        <img src="{{ $program->image }}" alt="{{ $program->title }}" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full text-white 
                                {{ $program->status == 'Completed' ? 'bg-emerald-600' : ($program->status == 'Ongoing' ? 'bg-green-700' : 'bg-orange-500') }}">
                                {{ $program->status }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $program->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $program->description }}</p>

                        <div class="text-sm text-gray-700 mb-4 space-y-2">
                            <p><strong>Audience:</strong> {{ $program->target_audience }}</p>
                            <p><strong>Duration:</strong> {{ $program->duration }}</p>
                            <p><strong>Location:</strong> {{ $program->location }}</p>
                            <p><strong>Date:</strong> {{ date('F j, Y', strtotime($program->date)) }}</p>
                        </div>

                        <button onclick="openProgramModal({{ json_encode($program) }})"
                            class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-600 to-green-700 text-white px-4 py-2.5 rounded-lg hover:from-emerald-500 hover:to-green-600 transition-all duration-200 shadow-md hover:shadow-lg">
                            Learn More
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $communityPrograms->links() }}
        </div>
    </div>
</section>
@endsection

<!-- Program Modal -->
<div id="programModal" 
     class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-xl shadow-lg max-w-2xl w-full relative p-6 
                max-h-[90vh] overflow-y-auto"
         onclick="event.stopPropagation()">
        <button onclick="closeProgramModal()" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl">
            &times;
        </button>
        <div id="programContent" class="p-6">
            <!-- Program details will be inserted here -->
        </div>
    </div>
</div>

<script src="https://unpkg.com/alpinejs" defer></script>

<script>
    function openProgramModal(program) {
        const modal = document.getElementById('programModal');
        const content = document.getElementById('programContent');

        content.innerHTML = `
                <h3 class="text-2xl font-bold text-gray-900 mb-4">${program.title}</h3>
                <img src="${program.image}" alt="${program.title}" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="mb-4">
                    <span class="px-3 py-1 ${program.status === 'Completed' ? 'bg-green-100 text-green-800' : program.status === 'Ongoing' ? 'bg-blue-100 text-blue-800' : 'bg-orange-100 text-orange-800'} rounded-full text-sm">${program.status}</span>
                </div>
                <p class="text-gray-600 mb-6">${program.description}</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Target Audience</h4>
                        <p class="text-gray-600">${program.target_audience}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Duration</h4>
                        <p class="text-gray-600">${program.duration}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Location</h4>
                        <p class="text-gray-600">${program.location}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Participants</h4>
                        <p class="text-gray-600">${program.participants} people</p>
                    </div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-gray-900 mb-2">Impact</h4>
                    <p class="text-gray-600">${program.impact}</p>
                </div>
            `;

        modal.classList.remove('hidden'); // ✅ gunakan class Tailwind
    }

    function closeProgramModal() {
        const modal = document.getElementById('programModal');
        modal.classList.add('hidden'); // ✅ tutup dengan hidden
    }

    // Tutup modal kalau klik di luar
    document.getElementById('programModal').addEventListener('click', function () {
        closeProgramModal();
    });
</script>