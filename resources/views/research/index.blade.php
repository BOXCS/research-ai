@extends('layouts.app')

@section('content')
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-green-900 mb-4">
                    All Research Projects
                </h2>
                <p class="text-lg text-green-800">Explore the complete list of our research projects</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($researchProducts as $product)
                    <div
                        class="group relative bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl border border-white border-opacity-50 transition-all duration-300 hover:shadow-2xl hover:border-opacity-80 hover:bg-opacity-90 hover:-translate-y-2">

                        <!-- Image overlay -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>

                            <!-- Badges -->
                            <div class="absolute top-4 left-4 flex flex-col items-start gap-2">
                                <span
                                    class="px-3 py-1 bg-[#a8d08d]/90 text-[#2c4e1d] text-xs font-semibold rounded-full backdrop-blur-sm">
                                    {{ optional($product->category)->name }}
                                </span>
                                <span
                                    class="px-3 py-1 {{ $product['status'] == 'Active' ? 'bg-green-500/90' : ($product['status'] == 'Completed' ? 'bg-[#718c3c]/90' : 'bg-orange-500/90') }} text-white text-xs font-semibold rounded-full backdrop-blur-sm">
                                    {{ $product->status }}
                                </span>
                            </div>
                        </div>

                        <div class="relative z-10 p-6">
                            <h3
                                class="text-xl font-semibold text-gray-900 mb-3 group-hover:text-[#a8d08d] transition-colors">
                                {{ $product->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">
                                {{ $product->description }}
                            </p>

                            <div class="flex items-center text-sm text-gray-500 mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $product->tgl_mulai->format('M Y') }} - {{ $product->tgl_selesai->format('M Y') }}
                            </div>

                            <div class="flex gap-3">
                                <button onclick="openVideoModal('{{ $product['video_url'] }}', '{{ $product['title'] }}')"
                                    class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-green-400 to-green-600 text-white px-4 py-2.5 rounded-lg hover:from-green-500 hover:to-green-700 transition-all duration-200 shadow-md hover:shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Demo
                                </button>
                                <button onclick="openDetailsModal({{ json_encode($product) }})"
                                    class="flex-1 flex items-center justify-center gap-2 border border-[#718c3c] text-[#2c4e1d] px-4 py-2.5 rounded-lg hover:border-[#a8d08d] hover:text-[#a8d08d] hover:bg-[#E3F1D9]/30 transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $researchProducts->links() }}
            </div>
        </div>
    </section>
@endsection

<!-- Video Modal -->
<div id="videoModal" class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-lg max-w-2xl w-full relative p-6">
        <button onclick="closeVideoModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            &times;
        </button>
        <div id="videoContainer" class="aspect-video mb-4"></div>
        <h3 id="videoTitle" class="text-2xl font-bold text-gray-900"></h3>
    </div>
</div>

<!-- Details Modal -->
<div id="detailsModal" class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-lg max-w-2xl w-full relative p-6">
        <button onclick="closeDetailsModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            &times;
        </button>
        <div id="detailsContent"></div>
    </div>
</div>


<script src="https://unpkg.com/alpinejs" defer></script>

<script>
    function openVideoModal(videoUrl, title) {
        const modal = document.getElementById('videoModal');
        const videoContainer = document.getElementById('videoContainer');
        const videoTitle = document.getElementById('videoTitle');

        const youtubeId = extractYouTubeID(videoUrl);
        if (!youtubeId) {
            videoContainer.innerHTML = `<p class="text-red-500">Invalid YouTube URL</p>`;
            return;
        }

        const embedUrl = `https://www.youtube.com/embed/${youtubeId}`;
        videoContainer.innerHTML = `
        <iframe width="100%" height="315"
            src="${embedUrl}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>`;

        videoTitle.textContent = title;
        modal.classList.remove('hidden');
    }

    function extractYouTubeID(url) {
        // Match various YouTube URL formats
        const regex = /(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
        const match = url.match(regex);
        return match ? match[1] : null;
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const videoContainer = document.getElementById('videoContainer');
        modal.classList.add('hidden');
        videoContainer.innerHTML = '';
    }

    function openDetailsModal(product) {
        const modal = document.getElementById('detailsModal');
        const content = document.getElementById('detailsContent');

        content.innerHTML = `
        <h3 class="text-2xl font-bold text-gray-900 mb-4">${product.title}</h3>
        <img src="/storage/${product.image}" alt="${product.title}" class="w-full h-64 object-cover rounded-lg mb-4">
        <p class="text-gray-600 mb-4">${product.description}</p>
    `;

        modal.classList.remove('hidden');
    }

    function closeDetailsModal() {
        const modal = document.getElementById('detailsModal');
        modal.classList.add('hidden');
    }


    window.onclick = function(event) {
        const modals = ['videoModal', 'detailsModal'];
        modals.forEach(modalId => {
            const modal = document.getElementById(modalId);
            if (event.target === modal) {
                modal.classList.add('hidden');
                if (modalId === 'videoModal') {
                    document.getElementById('videoContainer').innerHTML = '';
                }
            }
        });
    }
</script>
