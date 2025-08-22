<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Research Website') }}</title>

    <!-- SVG Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('research-logo-green.svg') }}">

    <!-- Fallback PNG untuk browser lama -->
    <link rel="alternate icon" href="{{ asset('research-logo-green.png') }}" type="image/png">

    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-green-50 to-emerald-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-white/70 backdrop-blur-sm shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-green-800">Research</a>
                <nav class="flex gap-6">
                    <a href="{{ url('/') }}" class="text-green-900 hover:text-green-700">Home</a>
                    <a href="{{ route('research.index') }}" class="text-green-900 hover:text-green-700">Research</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white/70 backdrop-blur-sm border-t border-green-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-green-800">
            <p>&copy; {{ date('Y') }} Research Website. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
