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
    <div class="bg-primary-blue dark:bg-slate-900 text-white py-2.5 overflow-hidden whitespace-nowrap sticky top-0 z-[100] shadow-2xl border-b border-white/10 group">
        <div class="inline-block animate-marquee font-bold text-[10px] md:text-xs uppercase tracking-[0.2em] px-4">
            <span>Abstract Submission Deadline: <strike style="color: red; font-size: .9em;">25<sup>th</sup> May 2026</strike> <strike style="color: red; font-size: .9em;">5<sup>th</sup> June 2026</strike> 7<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Notification of Acceptance: <strike style="color: red; font-size: .9em;">30<sup>th</sup> May 2026</strike> 7<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Full Paper Submission Deadline: <strike style="color: red; font-size: .9em;">10<sup>th</sup> June 2026</strike> 15<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Registration Deadline: 15<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Conference Dates: 17<sup>th</sup> - 18<sup>th</sup> July 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <!-- Repeat for seamless loop -->
            <span>Abstract Submission Deadline: <strike style="color: red; font-size: .9em;">25<sup>th</sup> May 2026</strike> <strike style="color: red; font-size: .9em;">5<sup>th</sup> June 2026</strike> 7<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Notification of Acceptance: <strike style="color: red; font-size: .9em;">30<sup>th</sup> May 2026</strike> 7<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Full Paper Submission Deadline: <strike style="color: red; font-size: .9em;">10<sup>th</sup> June 2026</strike> 15<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Registration Deadline: 15<sup>th</sup> June 2026</span>
            <span class="mx-12 text-white/20">|</span>
            <span>Conference Dates: 17<sup>th</sup> - 18<sup>th</sup> July 2026</span>
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
                <h2 class="text-xl md:text-4xl font-black text-primary-blue dark:text-white leading-tight">{{ $settings['hero_subtitle'] ?? '2026 INTERNATIONAL CONFERENCE' }}</h2>
                <p class="text-xl md:text-4xl font-black text-primary-blue dark:text-white leading-tight">on</p>
                <h1 class="text-xl md:text-4xl font-black text-primary-blue dark:text-white leading-tight">{{ $settings['hero_title'] ?? 'EMERGING TECHNOLOGIES AND ITS APPLICATIONS (ICETA)' }}</h1>
                <p class="text-sm md:text-xl font-bold text-primary-blue dark:text-accent-yellow mt-2">17<sup>th</sup> - 18<sup>th</sup> July 2026</p>
                
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
                    </div>
                    <div class="text-center group">
                        <img src="{{ asset('assets/images/logo/a2z.png') }}" alt="A2Z Logo" class="h-14 md:h-24 object-contain transition-transform group-hover:scale-105 duration-300">
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
                    <p>Email: conference2026@nitra.ac.in</p>
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

    @if(request()->routeIs('home') || Request::is('/') || Request::is('home'))
    <!-- Global Premium Image Popup Modal -->
    <style>
      /* Custom styled styles for the download list elements */
      .massage.list-inline-item {
          cursor: pointer;
          transition: all 0.3s ease;
      }
      .massage.list-inline-item:hover {
          text-decoration: underline;
          font-weight: bold;
          color: #fff;
      }
      .massage.list-inline-item:hover,
      .massage .list-inline-item:hover,
      .massage list-inline-item:hover {
          font-weight: 900;
      }

      /* Glassmorphic Overlay */
      .popup-overlay {
          position: fixed;
          inset: 0;
          background: rgba(15, 23, 42, 0.75); /* Modern deep slate with opacity */
          backdrop-filter: blur(8px); /* Sleek backdrop blur */
          -webkit-backdrop-filter: blur(8px);
          display: none;
          align-items: center;
          justify-content: center;
          z-index: 99999; /* Higher than sticky headers (z-50) */
          animation: popupFadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
      }

      /* Popup Container Card */
      .popup-content {
          position: relative;
          background: #ffffff;
          padding: 16px;
          border-radius: 24px; /* Premium smooth rounded corners */
          max-width: 500px;
          width: 90%;
          max-height: 90vh;
          box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); /* High depth shadow */
          animation: popupScaleIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); /* Elegant bounce entrance */
          overflow-y: auto;
          border: 1px solid rgba(255, 255, 255, 0.1);
      }

      /* Image within Popup */
      .popup-content img {
          display: block;
          width: 100%;
          max-height: 60vh;
          object-fit: contain;
          border-radius: 16px;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
          transition: transform 0.5s ease;
      }
      .popup-content img:hover {
          transform: scale(1.02); /* Interactive micro-animation */
      }

      /* Circular Close Button with rotation effect */
      .popup-close {
          position: absolute;
          top: 16px;
          right: 16px;
          background: #ffffff;
          border: none;
          font-size: 24px;
          font-weight: 300;
          color: #1e293b;
          cursor: pointer;
          border-radius: 50%;
          width: 36px;
          height: 36px;
          display: flex;
          align-items: center;
          justify-content: center;
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
          z-index: 10;
      }
      .popup-close:hover {
          background: #ef4444;
          color: #ffffff;
          transform: rotate(90deg); /* Modern hover interaction */
      }

      /* Entry Animations */
      @keyframes popupFadeIn {
          from { opacity: 0; }
          to { opacity: 1; }
      }
      @keyframes popupScaleIn {
          from { transform: scale(0.92); opacity: 0; }
          to { transform: scale(1); opacity: 1; }
      }
    </style>

    <div class="popup-overlay" id="popupOverlay">
      <div class="popup-content dark:bg-slate-900 dark:border-slate-800">
          <button class="popup-close dark:bg-slate-800 dark:text-white dark:hover:bg-red-600" id="popupClose" aria-label="Close modal">&times;</button>
          
          <div class="overflow-hidden rounded-2xl mb-4">
              <img src="https://nitra.ac.in/wp-content/uploads/2026/05/conference2026.jpeg" alt="Conference Announcement" class="w-full object-cover">
          </div>

          <div class="text-center px-2 py-1">
              <p class="text-lg font-bold text-slate-800 dark:text-white mb-4 tracking-tight">
                  Register now for the Conference
              </p>

              <a href="https://conference2026.nitra.ac.in/paper-submission" target="_blank" class="inline-block w-full">
                  <button class="w-full bg-blue-600 hover:bg-blue-700 active:scale-98 text-white font-bold py-3 px-8 rounded-xl shadow-lg shadow-blue-500/20 transition-all duration-300">
                      Register Now
                  </button>
              </a>
          </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const overlay = document.getElementById("popupOverlay");
        const popupClose = document.getElementById("popupClose");

        const CACHE_KEY = 'iceta_popup_last_shown';
        const ONE_HOUR = 60 * 60 * 1000; // in milliseconds

        const shouldShowPopup = () => {
          const lastShown = localStorage.getItem(CACHE_KEY);
          if (!lastShown) return true;
          
          const now = new Date().getTime();
          return (now - parseInt(lastShown, 10)) > ONE_HOUR;
        };

        // Auto open popup when load event fires (or fallback if already loaded)
        const showPopup = () => {
          if (shouldShowPopup()) {
            overlay.style.display = "flex";
            localStorage.setItem(CACHE_KEY, new Date().getTime().toString());
          }
        };

        if (document.readyState === "complete") {
          showPopup();
        } else {
          window.addEventListener("load", showPopup);
        }

        // Close popup on button click
        popupClose.addEventListener("click", () => {
          overlay.style.display = "none";
        });

        // Close on clicking outside the content card
        overlay.addEventListener("click", (e) => {
          if (e.target === overlay) {
            overlay.style.display = "none";
          }
        });

        // Close on pressing Escape key
        document.addEventListener("keydown", (e) => {
          if (e.key === "Escape") {
            overlay.style.display = "none";
          }
        });
      });
    </script>
    @endif

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('.massage.list-inline-item').forEach(function (el) {
            el.addEventListener('click', function () {
                const imageUrl = 'https://nitratextile.org/wp-content/uploads/2025/10/Nitra-Main-Logo-1.png';
                const fileName = 'Nitra-NTC-Logo.png';

                // Temporary click effect
                el.style.fontWeight = 'bold';
                el.style.textDecoration = 'underline';

                setTimeout(() => {
                    el.style.fontWeight = '';
                    el.style.textDecoration = '';
                }, 300); // Remove effect after 0.3s

                // Download logic
                const link = document.createElement('a');
                link.href = imageUrl;
                link.download = fileName;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });
      });
    </script>
</body>
</html>
