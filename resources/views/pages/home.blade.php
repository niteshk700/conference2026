@extends('layouts.conference')

@section('title', 'Home | ICETA-2026')

@section('content')
<!-- Hero Section -->
<section class="relative h-[600px] flex flex-col justify-center items-center text-center text-white px-4 overflow-hidden bg-primary-blue dark:bg-black transition-colors duration-300">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="Conference Background" class="w-full h-full object-cover opacity-30 dark:opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-primary-blue/80 to-primary-blue dark:from-black/80 dark:to-black"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl animate-fade-in">
        <p class="text-accent-yellow font-bold uppercase tracking-[0.3em] mb-4 text-sm md:text-base">{{ $settings['hero_subtitle'] ?? 'International Conference on' }}</p>
        <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight uppercase tracking-tighter">{{ $settings['hero_title'] ?? 'Emerging Technologies & its Applications' }}</h1>
        <p class="text-xl md:text-2xl font-bold mb-8 text-gray-200 dark:text-gray-400 uppercase tracking-widest">(ICETA-2026)</p>
        
        <div class="flex flex-col md:flex-row justify-center gap-6 mb-12">
            <div class="bg-white/10 backdrop-blur-md px-8 py-4 rounded-xl border border-white/20 dark:border-white/10">
                <p class="text-accent-yellow text-xs uppercase font-bold mb-1">Dates</p>
                <p class="text-lg font-bold">17th - 18th July 2026</p>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-8 py-4 rounded-xl border border-white/20 dark:border-white/10">
                <p class="text-accent-yellow text-xs uppercase font-bold mb-1">Venue</p>
                <p class="text-lg font-bold">NITRA Technical Campus, Ghaziabad</p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('call-for-paper') }}" class="cta-button">Call for Papers</a>
            <a href="{{ route('registration') }}" class="px-8 py-3 rounded font-bold border-2 border-accent-yellow text-accent-yellow transition-all duration-300 hover:bg-accent-yellow hover:text-primary-blue">Register Now</a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="py-24 px-8 max-w-6xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight transition-colors duration-300">Conference Overview</h2>
        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 text-lg leading-relaxed text-gray-600 dark:text-gray-400">
            <p>{{ $settings['conference_overview'] ?? 'The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators.' }}</p>
        </div>
        <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-2xl shadow-blue-900/5 dark:shadow-none border border-gray-100 dark:border-slate-700 transition-colors duration-300">
            <h3 class="text-xl font-bold text-primary-blue dark:text-blue-400 mb-6 border-b dark:border-slate-700 pb-4">Key Focus Areas</h3>
            <ul class="space-y-4">
                @php
                    $areas = explode(',', $settings['key_focus_areas'] ?? 'Advanced Computing, Artificial Intelligence, Cyber Security, Internet of Things (IoT), Sustainable Development');
                @endphp
                @foreach($areas as $area)
                <li class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-accent-yellow rounded-full"></div>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ trim($area) }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!-- Tracks Section -->
<section class="py-24 bg-slate-100 dark:bg-slate-900/50 px-8 transition-colors duration-300">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight transition-colors duration-300">Conference Tracks</h2>
            <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $tracks = [
                    ['id' => 1, 'title' => 'AI & Data Science', 'desc' => 'Machine Learning, Deep Learning, Generative AI, and AI applications.'],
                    ['id' => 2, 'title' => 'IoT & Robotics', 'desc' => 'Industrial IoT, Robotics & Automation, Smart Manufacturing.'],
                    ['id' => 3, 'title' => 'Cybersecurity', 'desc' => 'Blockchain, Digital Trust, Ethical Hacking, and Cryptography.'],
                    ['id' => 4, 'title' => 'Sustainable Tech', 'desc' => 'Green Computing, Smart Cities, and Technology for Social Good.'],
                ];
            @endphp

            @foreach($tracks as $track)
            <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl shadow-blue-900/5 dark:shadow-none border border-transparent dark:border-slate-700 transition-all duration-300 hover:border-accent-yellow hover:-translate-y-2">
                <div class="text-accent-yellow text-4xl font-black mb-4 opacity-20 group-hover:opacity-100 transition-opacity">0{{ $track['id'] }}</div>
                <h3 class="text-xl font-bold text-primary-blue dark:text-white mb-4 transition-colors duration-300">Track {{ $track['id'] }}</h3>
                <h4 class="text-blue-600 dark:text-blue-400 font-bold mb-4 uppercase text-xs tracking-widest">{{ $track['title'] }}</h4>
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ $track['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Important Dates -->
<section class="py-24 px-8 max-w-7xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight transition-colors duration-300">Important Dates</h2>
        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
    </div>

    <div class="flex flex-wrap justify-center gap-8 md:gap-16">
        @foreach($dates as $item)
        <div class="text-center group">
            <h3 class="text-2xl font-black {{ $item->is_highlighted ? 'text-blue-600 dark:text-accent-yellow scale-110' : 'text-gray-400 dark:text-gray-600 group-hover:text-primary-blue dark:group-hover:text-white' }} transition-all duration-300 mb-2">{{ $item->date_value }}</h3>
            <p class="text-xs uppercase font-bold tracking-widest text-gray-500 dark:text-gray-400">{{ $item->label }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection
