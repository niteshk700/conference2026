<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ICETA-2026 | NITRA Technical Campus')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="bg-slate-50 dark:bg-slate-900 font-['Inter'] transition-colors duration-300">
    <!-- Marquee Announcement -->
    @if($marquees->isNotEmpty())
    <div class="bg-primary-blue dark:bg-slate-900 text-white py-2.5 overflow-hidden whitespace-nowrap sticky top-0 z-[100] shadow-2xl border-b border-white/10 group">
        <div class="inline-block animate-marquee font-bold text-[10px] md:text-xs uppercase tracking-[0.2em] px-4">
            @foreach($marquees as $mq)
                @if($mq->url)
                    <a href="{{ $mq->url }}" {!! str_starts_with($mq->url, 'http') ? 'target="_blank"' : '' !!} class="hover:text-accent-yellow transition-colors duration-300">
                        {{ $mq->text }}
                    </a>
                @else
                    <span>{{ $mq->text }}</span>
                @endif
                <span class="mx-12 text-white/20">|</span>
            @endforeach
            <!-- Seamless transition spacer -->
            <span class="mx-12 text-white/20">|</span>
            <!-- Repeat for seamless loop -->
            @foreach($marquees as $mq)
                @if($mq->url)
                    <a href="{{ $mq->url }}" {!! str_starts_with($mq->url, 'http') ? 'target="_blank"' : '' !!} class="hover:text-accent-yellow transition-colors duration-300">
                        {{ $mq->text }}
                    </a>
                @else
                    <span>{{ $mq->text }}</span>
                @endif
                <span class="mx-12 text-white/20">|</span>
            @endforeach
            <span class="mx-12 text-white/20">|</span>
        </div>
    </div>
    <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: inline-block;
            animation: marquee 60s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
    @endif

    <!-- Academic Header Section -->
    <header class="bg-white dark:bg-slate-800 border-b border-gray-100 dark:border-slate-700 py-6 px-4 md:px-8 transition-colors duration-300">
        <div class="max-w-[1500px] mx-auto flex flex-col lg:flex-row justify-between items-center gap-8">
            
            <!-- Left: Main Logos -->
            <div class="flex flex-row justify-center lg:justify-start items-center gap-6">
                <div class="text-center group">
                    <img src="{{ asset('assets/images/logo/ntc.png') }}" alt="NITRA Logo" class="h-20 md:h-36 object-contain transition-transform group-hover:scale-105 duration-300">
                    <p class="text-[8px] md:text-[10px] font-bold text-gray-400 uppercase mt-2 dark:text-gray-500">NTC Ghaziabad</p>
                </div>
                <div class="text-center group">
                    <img src="{{ asset('assets/images/logo/aktu.png') }}" alt="AKTU Logo" class="h-20 md:h-36 object-contain transition-transform group-hover:scale-105 duration-300">
                    <p class="text-[8px] md:text-[10px] font-bold text-gray-400 uppercase mt-2 dark:text-gray-500">AKTU Sponsored</p>
                </div>
            </div>

            <!-- Center: Conference Details -->
            <div class="flex-1 text-center space-y-4 px-4 border-y lg:border-y-0 lg:border-x border-gray-100 dark:border-slate-700 py-8 lg:py-0 transition-colors duration-300">
                <h2 class="text-md md:text-2xl font-bold text-primary-blue dark:text-blue-400">{{ $settings['hero_subtitle'] ?? '2026 INTERNATIONAL CONFERENCE' }}</h2>
                <p class="text-xs md:text-lg font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-widest">on</p>
                <h1 class="text-xl md:text-4xl font-black text-primary-blue dark:text-white leading-tight">{{ $settings['hero_title'] ?? 'EMERGING TECHNOLOGIES AND ITS APPLICATIONS (ICETA)' }}</h1>
                <p class="text-sm md:text-xl font-bold text-primary-blue dark:text-accent-yellow mt-2">17th - 18th July 2026</p>
                
                <div class="inline-flex flex-wrap justify-center gap-2 md:gap-4 bg-blue-50 dark:bg-blue-900/20 px-4 md:px-6 py-1 md:py-2 rounded-full text-[10px] md:text-sm font-bold text-blue-600 dark:text-blue-300 mt-2 uppercase border border-blue-100 dark:border-blue-800">
                    <span>Conference Mode : Hybrid</span>
                    <span class="hidden md:inline">|</span>
                    <span>NITRA Technical Campus</span>
                </div>
            </div>

            <!-- Right: Association Logos & Theme Toggle -->
            <div class="flex flex-col items-center lg:items-end gap-6">
                <div class="flex gap-4 md:gap-6 items-center">
                    <div class="text-center group">
                        <img src="{{ asset('assets/images/logo/csi.png') }}" alt="CSI Logo" class="h-14 md:h-24 object-contain transition-transform group-hover:scale-105 duration-300">
                        <p class="text-[8px] md:text-[9px] font-bold text-gray-400 uppercase mt-1 dark:text-gray-500">CSI</p>
                    </div>
                    <div class="text-center group">
                        <img src="{{ asset('assets/images/logo/a2z.png') }}" alt="A2Z Logo" class="h-14 md:h-24 object-contain transition-transform group-hover:scale-105 duration-300">
                        <p class="text-[8px] md:text-[9px] font-bold text-gray-400 uppercase mt-1 dark:text-gray-500">A2Z Infra</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-xl text-sm p-2 md:p-3 border border-gray-100 dark:border-slate-700 transition-all">
                        <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="bg-maroon dark:bg-black sticky top-[44px] lg:top-[44px] z-50 shadow-lg transition-colors duration-300">
        <div class="max-w-[1400px] mx-auto px-4 lg:px-0">
            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden flex justify-between items-center py-4">
                <span class="text-white font-bold text-xs uppercase tracking-widest">Conference Menu</span>
                <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Links Container -->
            <ul id="nav-menu" class="hidden lg:flex flex-col lg:flex-row justify-center text-white text-[11px] md:text-sm font-bold uppercase tracking-wider transition-all duration-300">
                @foreach($pages as $page)
                <li class="w-full lg:flex-1 text-center">
                    @php
                        $route = $page->slug == 'home' ? 'home' : $page->slug;
                    @endphp
                    <a href="{{ Route::has($route) ? route($route) : '#' }}" class="py-4 lg:py-5 block hover:bg-white/10 transition-all border-b-4 {{ Request::is($page->slug == 'home' ? '/' : $page->slug . '*') ? 'border-accent-yellow bg-white/10' : 'border-transparent' }}">
                        {{ $page->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary-blue dark:bg-black text-white pt-16 pb-8 px-8 transition-colors duration-300">
        <div class="max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 border-b border-white/10 pb-12">
            <div class="space-y-4">
                <h3 class="text-accent-yellow text-xl font-bold uppercase tracking-widest">NITRA Technical Campus</h3>
                <p class="text-gray-300 leading-relaxed text-sm md:text-base">Sector-23, Raj Nagar, Ghaziabad, Uttar Pradesh, India</p>
                <div class="space-y-2 text-sm text-gray-400">
                    <p>Phone: 0120-2807390-95</p>
                    <p>Email: confrence2026@nitra.ac.in</p>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-accent-yellow text-xl font-bold uppercase tracking-widest">Quick Links</h3>
                <ul class="space-y-2 text-sm md:text-base">
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-accent-yellow transition-colors">About the Conference</a></li>
                    <li><a href="{{ route('call-for-paper') }}" class="text-gray-300 hover:text-accent-yellow transition-colors">Call for Papers</a></li>
                    <li><a href="{{ route('registration') }}" class="text-gray-300 hover:text-accent-yellow transition-colors">Registration Details</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-accent-yellow text-xl font-bold uppercase tracking-widest">Organizers & Partners</h3>
                <div class="pt-4 flex flex-wrap gap-4 md:gap-6 items-center">
                    <img src="{{ asset('assets/images/logo/ntc.png') }}" alt="NITRA Logo" class="h-10 md:h-14 opacity-50 grayscale hover:grayscale-0 transition-all">
                    <img src="{{ asset('assets/images/logo/aktu.png') }}" alt="AKTU Logo" class="h-10 md:h-14 opacity-50 grayscale hover:grayscale-0 transition-all">
                    <img src="{{ asset('assets/images/logo/csi.png') }}" alt="CSI Logo" class="h-8 md:h-12 opacity-50 grayscale hover:grayscale-0 transition-all">
                    <img src="{{ asset('assets/images/logo/a2z.png') }}" alt="A2Z Logo" class="h-8 md:h-12 opacity-50 grayscale hover:grayscale-0 transition-all">
                </div>
            </div>
        </div>
        <div class="text-center pt-8 flex flex-col items-center gap-4">
            <div class="bg-white/10 px-6 py-2 rounded-full border border-white/20 backdrop-blur-sm">
                <p class="text-xs md:text-sm text-gray-300 font-bold uppercase tracking-[0.2em]">Total Visitors: <span class="text-accent-yellow text-lg ml-2">{{ number_format($settings['view_count'] ?? 0) }}</span></p>
            </div>
            <p class="text-gray-500 text-[10px] md:text-xs uppercase tracking-[0.2em]">&copy; 2026 NITRA Technical Campus. All Rights Reserved. | ICETA-2026</p>
        </div>
    </footer>

    <script>
        // Theme Toggle Logic
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });

        // Mobile Menu Toggle Logic
        var mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        var navMenu = document.getElementById('nav-menu');
        var menuIcon = document.getElementById('menu-icon');
        var closeIcon = document.getElementById('close-icon');

        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>
</html>
