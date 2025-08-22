<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research AI - Advanced AI Research Laboratory</title>
    <meta name="description"
        content="Leading AI research laboratory focused on innovative solutions in healthcare, agriculture, and education technology.">
    <meta name="keywords" content="AI research, machine learning, deep learning, healthcare AI, agricultural technology">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Research AI - Advanced AI Research Laboratory">
    <meta property="og:description"
        content="Leading AI research laboratory focused on innovative solutions in healthcare, agriculture, and education technology.">
    <meta property="og:image" content="https://research-ai.my.id/images/og-image.jpg">
    <meta property="og:url" content="https://research-ai.my.id">
    <meta property="og:type" content="website">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            scroll-behavior: smooth;
            background-color: #F0F7ED;
            /* hijau pastel sangat terang */
            color: #1a1a1a;
            /* teks default, bisa disesuaikan */
            font-family: 'Inter', sans-serif;
            /* tetap pakai font Inter */
        }


        .gradient-bg {
            background: linear-gradient(135deg, #556b2f 0%, #6b8e23 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .forest-green-gradient {
            background: linear-gradient(135deg, #2c4e1d 0%, #3b6e2f 100%);
        }

        .floating-card {
            transition: transform 0.3s ease;
        }

        .floating-card:hover {
            transform: translateY(-5px);
        }

        .text-gradient {
            background: linear-gradient(135deg, #556b2f 0%, #6b8e23 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 5px rgba(85, 107, 47, 0.5);
            }

            50% {
                box-shadow: 0 0 20px rgba(107, 142, 35, 0.8);
            }
        }

        .logo-team svg path {
            fill: #a8d08d;
            /* hijau terang */
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(34, 49, 0, 0.85);
        }

        .modal-content {
            background-color: #f5f9f0;
            margin: 5% auto;
            padding: 0;
            border-radius: 10px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            padding: 20px;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 100;
        }

        .scroll-progress {
            height: 100%;
            background: linear-gradient(90deg, #556b2f, #6b8e23);
            width: 0%;
            transition: width 0.3s ease;
        }

        .section-fade {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .section-fade.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Typing Animation */
        #typing-text::after {
            content: "|";
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        /* Mouse Scroll Animation */
        .mouse-scroll {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mouse {
            width: 25px;
            height: 40px;
            border: 2px solid #c0d9af;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            padding-top: 5px;
        }

        .wheel {
            width: 4px;
            height: 8px;
            background-color: #c0d9af;
            border-radius: 2px;
            animation: scroll-wheel 2s infinite;
        }

        @keyframes scroll-wheel {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(10px);
                opacity: 0;
            }
        }

        .arrows {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 5px;
        }

        .arrow-down {
            width: 10px;
            height: 10px;
            border-right: 2px solid #c0d9af;
            border-bottom: 2px solid #c0d9af;
            transform: rotate(45deg);
            animation: arrow-pulse 2s infinite;
        }

        @keyframes arrow-pulse {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 1;
            }
        }

        /* Line clamp for description */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Smooth card hover effect */
        .group:hover .group-hover\:scale-105 {
            transform: scale(1.05);
        }

        /* Alpine.js cloak to prevent flash of unstyled content */
        [x-cloak] {
            display: none !important;
        }

        /* Social icon hover effect */
        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .parallax-bg {
            background-image: url('https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.7;
        }

        /* Animasi saat scroll masuk */
        .mission-content.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Efek hover untuk card */
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body style="background-color: #F0F7ED;">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-progress" id="scrollProgress"></div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-gradient">research-ai.my.id</h1>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#hero"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">Home</a>
                        <a href="#research"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">Research</a>
                        <a href="#publications"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">Publications</a>
                        <a href="#community"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">Community</a>
                        <a href="#team"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">Team</a>
                    </div>
                </div>

                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#hero"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Home</a>
                <a href="#research"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Research</a>
                <a href="#publications"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Publications</a>
                <a href="#community"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Community</a>
                <a href="#team"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Team</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <!-- Hero Section dengan 3D Illustration -->
    <section id="hero"
        class="min-h-screen flex items-center justify-center forest-green-gradient relative overflow-hidden">
        <!-- Background Shapes -->
        <div class="absolute top-0 left-0 w-full h-full opacity-15">
            <div class="absolute top-10 left-10 w-64 h-64 bg-[#2c4e1d] rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-[#3b6e2f] rounded-full filter blur-3xl"></div>
        </div>

        <div class="relative z-10 container mx-auto px-6 py-16 md:py-24">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <span
                        class="inline-block px-4 py-2 bg-white bg-opacity-10 text-green-200 rounded-full text-sm font-medium mb-6 border border-white border-opacity-10">
                        research-ai.my.id
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#a8d08d] to-[#8db665]">Academy
                            Industrial</span>
                        <span class="block">Research on Intelegence System</span>
                    </h1>
                    <p class="text-xl text-gray-200 mb-8 max-w-xl">
                        Selamat datang di halaman resmi <strong>Dr. Denny Trias Utomo, S.Si, MT</strong>, seorang
                        akademisi, peneliti, dan inovator teknologi dari Politeknik Negeri Jember. Dengan pengalaman
                        lebih dari dua dekade di bidang <strong>Sistem Cerdas, IoT, dan Teknologi Informasi</strong>,
                        beliau telah memimpin berbagai proyek penelitian dan pengabdian masyarakat yang mengubah wajah
                        pendidikan, pertanian, energi, dan kesehatan berbasis teknologi tepat guna.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#research"
                            class="flex items-center justify-center gap-2 bg-white text-green-900 px-6 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-[1.02] shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Jelajahi Penelitian
                        </a>
                        <a href="#contact"
                            class="flex items-center justify-center gap-2 border-2 border-white text-white px-6 py-4 rounded-lg font-semibold hover:bg-white hover:text-green-900 transition-all duration-300 transform hover:scale-[1.02]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            Hubungi Saya
                        </a>
                    </div>
                </div>

                <div class="lg:w-1/2 relative">
                    <div class="relative w-full h-96 lg:h-[500px]">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-10 backdrop-blur-md rounded-2xl border border-black border-opacity-10 shadow-2xl overflow-hidden">
                            <div class="w-full h-full flex items-center justify-center">
                                <img src="{{ asset('images/research-logo-green.svg') }}" class="logo-team h-80 w-80"
                                    alt="Team Logo">
                            </div>
                        </div>

                        <!-- Floating cards -->
                        <div
                            class="absolute -top-6 -left-6 w-32 h-32 bg-[#2c4e1d] bg-opacity-25 rounded-xl border border-[#2c4e1d] border-opacity-30 backdrop-blur-sm p-4 transform rotate-6 floating-card">
                            <div class="text-white text-sm font-medium">Sistem Cerdas</div>
                        </div>
                        <div
                            class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#3b6e2f] bg-opacity-25 rounded-xl border border-[#3b6e2f] border-opacity-30 backdrop-blur-sm p-4 transform -rotate-6 floating-card">
                            <div class="text-white text-sm font-medium">IoT</div>
                        </div>
                        <div
                            class="absolute top-1/4 -right-10 w-28 h-28 bg-[#2c4e1d] bg-opacity-25 rounded-xl border border-[#2c4e1d] border-opacity-30 backdrop-blur-sm p-4 transform rotate-12 floating-card">
                            <div class="text-white text-sm font-medium">AI Research</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div id="scroll-indicator" class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center">
                <span class="text-sm text-white mb-2">Scroll Down</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white animate-bounce" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Additional Content (Placeholder) -->
    <section class="py-20 px-6 bg-[#1f3a14]">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-3xl sm:text-4xl font-bold text-center text-green-200 mb-12">Tentang Dr. Denny Trias Utomo
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-[#2c4e1d] bg-opacity-80 p-6 rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-full bg-green-600 text-white mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-3-3v6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-green-100">Pendekatan Multidisipliner</h3>
                    </div>
                    <p class="text-gray-200 text-sm">Menghadirkan solusi berbasis data, sistem pakar, dan kecerdasan
                        buatan untuk menjawab tantangan nyata masyarakat.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-[#2c4e1d] bg-opacity-80 p-6 rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-full bg-green-600 text-white mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-green-100">Proyek Smart Village & AI</h3>
                    </div>
                    <p class="text-gray-200 text-sm">Dari alat diagnosis cerdas pertanian & peternakan, hingga sistem
                        pendukung keputusan berbasis machine learning.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-[#2c4e1d] bg-opacity-80 p-6 rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-full bg-green-600 text-white mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zM6 20h12v-2a4 4 0 00-4-4H10a4 4 0 00-4 4v2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-green-100">Transformasi Digital</h3>
                    </div>
                    <p class="text-gray-200 text-sm">Semua proyek dan inovasi ditujukan untuk mewujudkan transformasi
                        digital inklusif yang berdampak positif bagi masyarakat.</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-12 text-center">
                <a href="#research"
                    class="inline-block bg-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Jelajahi Karya & Publikasi
                </a>
            </div>
        </div>
    </section>


    <!-- About Mission Section -->
    <section id="about-mission" class="py-20 bg-gradient-to-b from-green-50 to-emerald-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-green-700 bg-opacity-10 text-green-700 rounded-full text-sm font-medium mb-4 border border-green-700 border-opacity-20">
                    Our Foundation
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-600">
                        Our Purpose
                    </span>
                    & Mission
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We aim to pioneer ethical AI solutions that empower people, enhance industries, and respect human
                    values.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-green-700/20 hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <h3 class="text-2xl font-semibold text-green-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Our Vision
                    </h3>
                    <p class="text-gray-700">
                        To pioneer AI solutions that transform industries and improve lives globally. We envision a
                        future where AI enhances human potential without replacing human values.
                    </p>
                </div>

                <div
                    class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-green-700/20 hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <h3 class="text-2xl font-semibold text-green-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Our Mission
                    </h3>
                    <p class="text-gray-700">
                        To develop ethical, sustainable AI technologies through rigorous research and collaboration. We
                        commit to creating AI that is transparent, accountable, and beneficial to humanity.
                    </p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <div class="bg-gradient-to-r from-green-700 to-emerald-600 rounded-2xl p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-white mb-3">Our Research Philosophy</h3>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        At our core, we believe AI should augment human capabilities, not replace them. Our research
                        combines cutting-edge technology with deep societal awareness.
                    </p>
                    <a href="#research"
                        class="inline-flex items-center px-6 py-3 bg-white text-green-700 font-medium rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Explore Our Research
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- Research Products Section -->
    <section id="research" class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-green-200/30 text-green-900 rounded-full text-sm font-medium mb-4 border border-green-300/50">
                    Our Innovations
                </span>
                <h2 class="text-4xl font-bold text-green-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-700">
                        Research
                    </span> Projects
                </h2>
                <p class="text-xl text-green-800 max-w-3xl mx-auto">
                    Cutting-edge AI research initiatives that are transforming industries and solving real-world
                    challenges.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($researchProducts as $product)
                    <div
                        class="group relative bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl border border-white border-opacity-50 transition-all duration-300 hover:shadow-2xl hover:border-opacity-80 hover:bg-opacity-90 hover:-translate-y-2">

                        <!-- Image overlay -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}"
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
                                <button
                                    onclick="openVideoModal('{{ $product['video_url'] }}', '{{ $product['title'] }}')"
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

            <!-- View All Button -->
            <div class="text-center mt-16">
                <a href="{{ route('research.index') }}"
                    class="inline-flex items-center px-6 py-3 text-base font-medium rounded-full shadow-md text-white bg-gradient-to-r from-green-400 to-green-600 hover:from-green-500 hover:to-green-700 transition-all duration-300 transform hover:scale-105">
                    View All Research Projects
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>            
        </div>
    </section>

    <!-- Publications Section -->
    <section id="publications" class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-emerald-200/30 text-emerald-900 rounded-full text-sm font-medium mb-4 border border-emerald-300">
                    Academic Contributions
                </span>
                <h2 class="text-4xl font-bold text-emerald-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-green-700">
                        Research
                    </span>
                    Publications
                </h2>
                <p class="text-xl text-emerald-800 max-w-3xl mx-auto">
                    Peer-reviewed publications in top-tier journals and conferences advancing the frontiers of AI
                    knowledge.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($publications as $publication)
                    <div
                        class="group relative bg-white/70 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl border border-white/60 transition-all duration-300 hover:shadow-2xl hover:bg-white/90 hover:-translate-y-1">

                        <!-- Decorative gradient bar -->
                        <div class="h-2 bg-gradient-to-r from-emerald-600 to-green-700"></div>

                        <div class="p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1 pr-4">
                                    <h3
                                        class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">
                                        {{ $publication->title }}
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-3">{{ $publication->authors }}</p>
                                </div>
                                <div>
                                    <span
                                        class="px-3 py-1 bg-emerald-100 text-emerald-800 text-xs font-semibold rounded-full">
                                        {{ $publication->category->name ?? 'Uncategorized' }}
                                    </span>
                                </div>
                            </div>

                            <div class="mb-5">
                                <p class="text-gray-700 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-emerald-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                    {{ $publication->journal }}
                                </p>
                                <p class="text-gray-500 text-sm mt-1">
                                    Vol. {{ $publication['volume'] }}, Issue {{ $publication->issue }}
                                    ({{ $publication->year }})
                                    | Pages {{ $publication->pages }}
                                </p>
                            </div>

                            <!-- Abstract with read more toggle -->
                            <div x-data="{ expanded: false }" class="mb-6">
                                <p class="text-gray-600 text-sm" x-show="!expanded" x-cloak>
                                    {{ Str::limit($publication->abstract, 150) }}
                                    <button @click="expanded = true"
                                        class="text-emerald-700 hover:text-emerald-900 font-medium">
                                        Read more...
                                    </button>
                                </p>
                                <p class="text-gray-600 text-sm" x-show="expanded" x-cloak>
                                    {{ $publication->abstract }}
                                    <button @click="expanded = false"
                                        class="text-emerald-700 hover:text-emerald-900 font-medium">
                                        Show less
                                    </button>
                                </p>
                            </div>

                            <!-- Action buttons -->
                            <div class="flex gap-3">
                                <a href="{{ $publication->pdf_url }}"
                                    class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-600 to-green-700 text-white px-4 py-2.5 rounded-lg hover:from-emerald-500 hover:to-green-600 transition-all duration-200 shadow-md hover:shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    PDF
                                </a>
                                <a href="https://doi.org/{{ $publication->doi }}" target="_blank"
                                    class="flex-1 flex items-center justify-center gap-2 border border-emerald-600 text-emerald-800 px-4 py-2.5 rounded-lg hover:bg-emerald-50 transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    DOI
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="{{ route('publications.index') }}"
                    class="inline-flex items-center px-6 py-3 text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-emerald-600 to-green-700 hover:from-emerald-500 hover:to-green-600 transition-all duration-300 transform hover:scale-105">
                    View All Publications
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Community Service Section -->
    <section id="community" class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-emerald-200/30 text-emerald-900 rounded-full text-sm font-medium mb-4 border border-emerald-300">
                    Social Impact
                </span>
                <h2 class="text-4xl font-bold text-emerald-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-green-700">
                        Community
                    </span>
                    Engagement
                </h2>
                <p class="text-xl text-emerald-800 max-w-3xl mx-auto">
                    Bridging technology and society through impactful programs that empower communities and drive
                    positive change.
                </p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($communityPrograms as $program)
                    <div
                        class="group relative bg-white/70 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl border border-white/60 transition-all duration-300 hover:shadow-2xl hover:bg-white/90 hover:-translate-y-2">
                        
                        <!-- Image with overlay -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ $program['image'] }}" alt="{{ $program->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/60 to-transparent"></div>
    
                            <!-- Status badge -->
                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-3 py-1 
                                        {{ $program['status'] == 'Completed' ? 'bg-emerald-600/90' : ($program['status'] == 'Ongoing' ? 'bg-green-700/90' : 'bg-orange-500/90') }} 
                                        text-white text-xs font-semibold rounded-full backdrop-blur-sm">
                                    {{ $program['status'] }}
                                </span>
                            </div>
                        </div>
    
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold text-gray-900 mb-3 group-hover:text-emerald-700 transition-colors">
                                {{ $program->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">
                                {{ $program['description'] }}
                            </p>
    
                            <!-- Program details -->
                            <div class="space-y-3 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-emerald-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    {{ $program['target_audience'] }}
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-emerald-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $program['duration'] }}
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-emerald-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ $program['location'] }}
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-emerald-700"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ date('F j, Y', strtotime($program['date'])) }}
                                </div>
                            </div>
    
                            <!-- Impact card -->
                            <div class="bg-white/70 p-4 rounded-lg mb-5 border border-white/50 backdrop-blur-md">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-emerald-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                        Impact
                                    </span>
                                    <span
                                        class="text-sm bg-emerald-100 text-emerald-800 px-2 py-1 rounded-full font-semibold">
                                        {{ $program['participants'] }} participants
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 line-clamp-2">
                                    {{ $program['impact'] }}
                                </p>
                            </div>
    
                            <!-- Learn more button -->
                            <button onclick="openProgramModal({{ json_encode($program) }})"
                                class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-600 to-green-700 text-white px-4 py-2.5 rounded-lg hover:from-emerald-500 hover:to-green-600 transition-all duration-200 shadow-md hover:shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Learn More
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="{{ route('community.index') }}"
                    class="inline-flex items-center px-6 py-3 text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-emerald-600 to-green-700 hover:from-emerald-500 hover:to-green-600 transition-all duration-300 transform hover:scale-105">
                    View All Community Programs
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>    

    <!-- Team Section -->
    <section id="team" class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-green-700 bg-opacity-10 text-green-700 rounded-full text-sm font-medium mb-4 border border-green-700 border-opacity-20">
                    Research Minds
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-600">
                        Our Expert
                    </span> Team
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    A diverse collective of researchers and innovators pushing the boundaries of AI across multiple
                    disciplines.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($teamMembers as $member)
                    <div
                        class="group relative bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl border border-white border-opacity-50 transition-all duration-300 hover:shadow-2xl hover:border-opacity-80 hover:bg-opacity-90 hover:-translate-y-2">

                        <!-- Profile image with overlay -->
                        <div class="relative h-72 overflow-hidden">
                            <img src="{{ asset('storage/' . $member['image']) }}" alt="{{ $member['name'] }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent">
                            </div>

                            <!-- Name and position -->
                            <div class="absolute bottom-6 left-6 text-white">
                                <h3 class="text-xl font-semibold">{{ $member['name'] }}</h3>
                                <p class="text-sm opacity-90">{{ $member['position'] }}</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <!-- Specialization -->
                            <div class="mb-4">
                                <p class="text-xs font-medium text-green-700 uppercase tracking-wider mb-1">
                                    Specialization</p>
                                <p class="text-gray-800 font-medium">{{ $member['specialization'] }}</p>
                            </div>

                            <!-- Education -->
                            <div class="mb-4">
                                <p class="text-xs font-medium text-green-700 uppercase tracking-wider mb-1">Education
                                </p>
                                <p class="text-gray-800 text-sm">{{ $member['education'] }}</p>
                            </div>

                            <!-- Stats -->
                            <div class="flex justify-between mb-5">
                                <div class="text-center">
                                    <p class="text-2xl font-bold text-green-700">{{ $member['publications'] }}</p>
                                    <p class="text-xs text-gray-500">Papers</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-2xl font-bold text-green-700">{{ $member['h_index'] }}</p>
                                    <p class="text-xs text-gray-500">h-index</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-2xl font-bold text-green-700">{{ $member['experience'] ?? '5+' }}
                                    </p>
                                    <p class="text-xs text-gray-500">Years</p>
                                </div>
                            </div>

                            <!-- Social links -->
                            <div class="flex justify-center gap-3 mb-5">
                                {{-- LinkedIn --}}
                                @if(!empty($member['linkedin']))
                                    <a href="{{ $member['linkedin'] }}" target="_blank"
                                        class="w-9 h-9 flex items-center justify-center bg-green-100 text-green-700 rounded-full hover:bg-green-700 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                @else
                                    <button onclick="alert('Member tidak memiliki LinkedIn')" 
                                        class="w-9 h-9 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full cursor-not-allowed">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5z" />
                                        </svg>
                                    </button>
                                @endif
                            
                                {{-- Google Scholar --}}
                                @if(!empty($member['google_scholar']))
                                    <a href="{{ $member['google_scholar'] }}" target="_blank"
                                        class="w-9 h-9 flex items-center justify-center bg-green-100 text-green-700 rounded-full hover:bg-green-700 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 24a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm0-24L0 9.5l4.838 3.94A8 8 0 0 1 12 9a8 8 0 0 1 7.162 4.44L24 9.5z"/>
                                        </svg>
                                    </a>
                                @else
                                    <button onclick="alert('Member tidak memiliki Google Scholar')" 
                                        class="w-9 h-9 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full cursor-not-allowed">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 24a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm0-24L0 9.5l4.838 3.94A8 8 0 0 1 12 9a8 8 0 0 1 7.162 4.44L24 9.5z"/>
                                        </svg>
                                    </button>
                                @endif
                            
                                {{-- Email --}}
                                @if(!empty($member['email']))
                                    <a href="mailto:{{ $member['email'] }}"
                                        class="w-9 h-9 flex items-center justify-center bg-green-100 text-green-700 rounded-full hover:bg-green-700 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </a>
                                @else
                                    <button onclick="alert('Member tidak memiliki Email')" 
                                        class="w-9 h-9 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full cursor-not-allowed">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                @endif
                            </div>                            

                            <!-- View profile button -->
                            <button onclick="openMemberModal({{ json_encode($member) }})"
                                class="w-full flex items-center justify-center gap-2 border-2 border-green-700 text-green-700 px-4 py-2.5 rounded-lg hover:bg-green-50 transition-all duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                View Profile
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Join Team CTA -->
            <div class="mt-16 text-center">
                <div class="bg-gradient-to-r from-green-700 to-emerald-600 rounded-2xl p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-white mb-3">Want to Join Our Team?</h3>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        We're always looking for talented researchers passionate about AI innovation.
                    </p>
                    <a href="#contact"
                        class="inline-flex items-center px-6 py-3 bg-white text-green-700 font-medium rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Explore Opportunities
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-b from-green-50 to-emerald-100 section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-green-700 bg-opacity-10 text-green-700 rounded-full text-sm font-medium mb-4 border border-green-700 border-opacity-20">
                    Let's Connect
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-600">Get
                        In</span>
                    Touch
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Interested in collaborating or learning more about our research? We'd love to hear from you.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div
                    class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-white border-opacity-50">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 backdrop-blur-sm border border-[#a8d08d]/40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#718c3c]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Address</h4>
                                <p class="text-gray-600">Research AI Laboratory<br>Jember, East Java, Indonesia</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 backdrop-blur-sm border border-[#a8d08d]/40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#718c3c]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600">info@research-ai.my.id</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 backdrop-blur-sm border border-[#a8d08d]/40">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#718c3c]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Phone</h4>
                                <p class="text-gray-600">+62 123 456 7890</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12">
                        <h4 class="font-semibold text-gray-900 mb-4">Follow Our Research</h4>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-10 h-10 bg-[#a8d08d]/20 rounded-full flex items-center justify-center backdrop-blur-sm border border-[#a8d08d]/40 hover:bg-[#718c3c] hover:text-white transition-colors duration-200">
                                <!-- Twitter -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <!-- Tambahkan ikon lain dengan class warna hijau yang sama -->
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div
                    class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-white border-opacity-50">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send Us a Message</h3>

                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#718c3c] focus:border-transparent transition-all duration-200">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#718c3c] focus:border-transparent transition-all duration-200">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#718c3c] focus:border-transparent transition-all duration-200">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your
                                Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#718c3c] focus:border-transparent transition-all duration-200"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-green-700 to-emerald-600 text-white px-6 py-3.5 rounded-lg font-semibold hover:from-[#94c263] hover:to-[#6f8930] transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gradient-to-b from-[#1a2e1a] to-[#243b20] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <!-- Brand Info -->
                <div class="space-y-5">
                    <div>
                        <h3
                            class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#a8d08d] to-[#718c3c] mb-2">
                            Research AI
                        </h3>
                        <p class="text-gray-300">
                            Pioneering AI research laboratory creating innovative solutions for healthcare, agriculture,
                            and education.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-[#2e4d2e] rounded-full flex items-center justify-center hover:bg-[#4a744a] transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200 hover:text-white"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300 hover:text-white"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-600 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300 hover:text-white"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-5 relative inline-block">
                        <span class="relative z-10">Quick Links</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#a8d08d] to-[#718c3c] rounded-full"></span>
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="#research"
                                class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Research</a></li>
                        <li><a href="#publications"
                                class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                Publications</a></li>
                        <li><a href="#community"
                                class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Community</a></li>
                        <li><a href="#team"
                                class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Team</a></li>
                    </ul>
                </div>

                <!-- Research Areas -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-5 relative inline-block">
                        <span class="relative z-10">Research Areas</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#a8d08d] to-[#718c3c] rounded-full"></span>
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-purple-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            Machine Learning
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-purple-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            Computer Vision
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-purple-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            Natural Language Processing
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-purple-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                            Robotics & IoT
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-5 relative inline-block">
                        <span class="relative z-10">Contact</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#a8d08d] to-[#718c3c] rounded-full"></span>
                    </h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Jember, East Java, Indonesia
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@research-ai.my.id
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +62 123 456 7890
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-500 text-sm">
                    &copy; 2024 Research AI. All rights reserved.
                    <span class="block sm:inline mt-2 sm:mt-0">Crafting the future through artificial
                        intelligence.</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Video Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeVideoModal()">&times;</span>
            <div id="videoContainer" class="video-container">
                <!-- Video will be inserted here -->
            </div>
            <div class="p-6">
                <h3 id="videoTitle" class="text-2xl font-bold text-gray-900 mb-4"></h3>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div id="detailsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeDetailsModal()">&times;</span>
            <div id="detailsContent" class="p-6">
                <!-- Details will be inserted here -->
            </div>
        </div>
    </div>

    <!-- Program Modal -->
    <div id="programModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeProgramModal()">&times;</span>
            <div id="programContent" class="p-6">
                <!-- Program details will be inserted here -->
            </div>
        </div>
    </div>

    <!-- Member Modal -->
    <div id="memberModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeMemberModal()">&times;</span>
            <div id="memberContent" class="p-6">
                <!-- Member details will be inserted here -->
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Scroll progress indicator
        window.addEventListener('scroll', function() {
            const scrollProgress = document.getElementById('scrollProgress');
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            scrollProgress.style.width = scrollPercent + '%';
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'shadow-lg');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'shadow-lg');
            }
        });

        // Intersection Observer for section animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-fade').forEach(section => {
            observer.observe(section);
        });

        // Modal functions
        function openVideoModal(videoUrl, title) {
            const modal = document.getElementById('videoModal');
            const videoContainer = document.getElementById('videoContainer');
            const videoTitle = document.getElementById('videoTitle');

            // Extract YouTube video ID from various URL formats
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
            modal.style.display = 'block';
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
            modal.style.display = 'none';
            videoContainer.innerHTML = '';
        }

        function openDetailsModal(product) {
            const modal = document.getElementById('detailsModal');
            const content = document.getElementById('detailsContent');

            content.innerHTML = `
                <h3 class="text-2xl font-bold text-gray-900 mb-4">${product.title}</h3>
                <img src="${product.image}" alt="${product.title}" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="flex items-center gap-4 mb-4">
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">{{ optional($product->category)->name }}</span>
                    <span class="px-3 py-1 ${product.status === 'Active' ? 'bg-green-100 text-green-800' : product.status === 'Completed' ? 'bg-blue-100 text-blue-800' : 'bg-orange-100 text-orange-800'} rounded-full text-sm">${product.status}</span>
                </div>
                <p class="text-gray-600 mb-4">${product.description}</p>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-gray-900 mb-2">Project Duration</h4>
                    <p class="text-gray-600">{{ $product->tgl_mulai->format('M Y') }} - {{ $product->tgl_selesai->format('M Y') }}</p>
                </div>
            `;

            modal.style.display = 'block';
        }

        function closeDetailsModal() {
            const modal = document.getElementById('detailsModal');
            modal.style.display = 'none';
        }

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

            modal.style.display = 'block';
        }

        function closeProgramModal() {
            const modal = document.getElementById('programModal');
            modal.style.display = 'none';
        }

        function openMemberModal(member) {
            const modal = document.getElementById('memberModal');
            const content = document.getElementById('memberContent');

            content.innerHTML = `
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/3">
                        <img src="/storage/${member.image}" alt="${member.name}" class="w-full h-80 object-cover rounded-lg">
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">${member.name}</h3>
                        <p class="text-xl text-blue-600 mb-4">${member.position}</p>
                        <p class="text-gray-600 mb-6">${member.bio}</p>
                        
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Specialization</h4>
                                <p class="text-gray-600">${member.specialization}</p>
                            </div>
                            
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Education</h4>
                                <p class="text-gray-600">${member.education}</p>
                            </div>
                            
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Experience</h4>
                                <p class="text-gray-600">${member.experience}</p>
                            </div>
                            
                            <div class="flex items-center gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600">${member.publications}</div>
                                    <div class="text-sm text-gray-600">Publications</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600">${member.h_index}</div>
                                    <div class="text-sm text-gray-600">H-Index</div>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <a href="${member.linkedin}" target="_blank" class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-center">
                                    <i class="fab fa-linkedin mr-2"></i>LinkedIn
                                </a>
                                <a href="${member.google_scholar}" target="_blank" class="flex-1 bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors duration-200 text-center">
                                    <i class="fas fa-graduation-cap mr-2"></i>Scholar
                                </a>
                                <a href="mailto:${member.email}" class="flex-1 bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200 text-center">
                                    <i class="fas fa-envelope mr-2"></i>Email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            modal.style.display = 'block';
        }

        function closeMemberModal() {
            const modal = document.getElementById('memberModal');
            modal.style.display = 'none';
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const modals = ['videoModal', 'detailsModal', 'programModal', 'memberModal'];
            modals.forEach(modalId => {
                const modal = document.getElementById(modalId);
                if (event.target === modal) {
                    modal.style.display = 'none';
                    if (modalId === 'videoModal') {
                        document.getElementById('videoContainer').innerHTML = '';
                    }
                }
            });
        }

        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                subject: formData.get('subject'),
                message: formData.get('message')
            };

            // Here you would typically send the data to your Laravel backend
            console.log('Contact form submitted:', data);

            // Show success message (replace with actual notification system)
            alert('Thank you for your message! We will get back to you soon.');

            // Reset form
            this.reset();
        });

        // Initialize animations and effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add any initialization code here
            console.log('Research AI Landing Page Loaded');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi mission content
            const missionSection = document.querySelector('#about-mission');
            const missionContent = document.querySelector('.mission-content');

            // Scroll indicator dari hero section
            const scrollIndicator = document.querySelector('#scroll-indicator .flex.flex-col.items-center');

            if (scrollIndicator) {
                scrollIndicator.addEventListener('click', function(e) {
                    e.preventDefault();
                    missionSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }

            // Intersection Observer untuk animasi
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        missionContent.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1
            });

            observer.observe(missionSection);

            // Smooth scroll ke research section
            const researchLinks = document.querySelectorAll('.scroll-to-research');
            researchLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector('#research').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Parallax effect
            window.addEventListener('scroll', function() {
                const scrollPosition = window.pageYOffset;
                const parallaxBg = document.querySelector('.parallax-bg');

                if (parallaxBg) {
                    parallaxBg.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px)';
                }
            });
        });
    </script>

    <script>
        // Typing Animation
        const typingText = document.getElementById('typing-text');
        const words = ["Healthcare", "Agriculture", "Education", "Industry", "Society"];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingSpeed = 100;

        function type() {
            const currentWord = words[wordIndex];

            if (isDeleting) {
                typingText.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
                typingSpeed = 50;
            } else {
                typingText.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
                typingSpeed = 100;
            }

            if (!isDeleting && charIndex === currentWord.length) {
                isDeleting = true;
                typingSpeed = 1500; // Pause at end
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typingSpeed = 500; // Pause before start
            }

            setTimeout(type, typingSpeed);
        }

        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            type();

            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: "#ffffff"
                    },
                    shape: {
                        type: "circle"
                    },
                    opacity: {
                        value: 0.5,
                        random: true
                    },
                    size: {
                        value: 3,
                        random: true
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#ffffff",
                        opacity: 0.3,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: "none",
                        random: true,
                        straight: false,
                        out_mode: "out"
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: true,
                            mode: "repulse"
                        },
                        onclick: {
                            enable: true,
                            mode: "push"
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>
