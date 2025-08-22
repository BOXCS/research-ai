@extends('layouts.app')

@section('content')
<section class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-emerald-900 mb-4">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-green-700">
                    All Publications
                </span>
            </h1>
            <p class="text-lg text-emerald-800">
                Browse through our complete list of academic publications.
            </p>
        </div>

        <!-- Publications List -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach ($publications as $publication)
                <div
                    class="group relative bg-white/70 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl border border-white/60 transition-all duration-300 hover:shadow-2xl hover:bg-white/90 hover:-translate-y-1">
                    
                    <div class="h-2 bg-gradient-to-r from-emerald-600 to-green-700"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition">
                            {{ $publication->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">{{ $publication->authors }}</p>
                        <p class="text-gray-700 font-medium">{{ $publication->journal }}</p>
                        <p class="text-gray-500 text-sm mt-1">
                            Vol. {{ $publication->volume }}, Issue {{ $publication->issue }} ({{ $publication->year }})
                            | Pages {{ $publication->pages }}
                        </p>

                        <!-- Abstract -->
                        <p class="text-gray-600 text-sm mt-4">
                            {{ Str::limit($publication->abstract, 200) }}
                        </p>

                        <!-- Action buttons -->
                        <div class="flex gap-3 mt-6">
                            <a href="{{ $publication->pdf_url }}"
                                class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-600 to-green-700 text-white px-4 py-2.5 rounded-lg hover:from-emerald-500 hover:to-green-600 transition">
                                PDF
                            </a>
                            <a href="https://doi.org/{{ $publication->doi }}" target="_blank"
                                class="flex-1 flex items-center justify-center gap-2 border border-emerald-600 text-emerald-800 px-4 py-2.5 rounded-lg hover:bg-emerald-50 transition">
                                DOI
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $publications->links() }}
        </div>
    </div>
</section>
@endsection
