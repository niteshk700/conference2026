@extends('layouts.conference')

@section('title', 'Call for Papers | ICETA-2026')

@section('content')
<!-- Focused Header -->
<section class="py-24 md:py-32 px-12 text-center bg-primary-blue dark:bg-slate-900 transition-colors duration-300">
    <div class="max-w-4xl mx-auto"><p class="text-accent-yellow font-black uppercase tracking-[0.3em] text-[10px] mb-2">Technical Program</p>
        <h1 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tighter mb-4">Call for Papers</h1>
        <div class="w-16 h-1 bg-accent-yellow mx-auto rounded-full"></div>
    </div>
</section>

<!-- Main Content Area -->
<div class="max-w-[1300px] mx-auto px-6 md:px-10 py-20 ">
    
    <!-- Invitation Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start mb-16">
        <div class="lg:col-span-2 space-y-6">
            <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white uppercase tracking-tight">Academic Invitation</h2>
            <p class="text-base md:text-lg text-gray-800 dark:text-gray-200 leading-relaxed font-medium">We invite original and unpublished research papers for ICETA-2026 from academicians, researchers, industry experts, and scholars. Submissions should reflect strong theoretical and practical relevance in emerging technologies.</p>
        </div>
        <div class="relative group">
            <!-- Glowing Background Accent -->
            <div class="absolute -inset-1 bg-gradient-to-r from-accent-yellow to-blue-500 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
            
            <div class="relative bg-white dark:bg-slate-900 p-10 rounded-[2rem] border-2 border-accent-yellow shadow-2xl space-y-6">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm font-black text-primary-blue dark:text-white uppercase tracking-widest mb-1">Submission Resources</h3>
                        <span class="inline-block px-2 py-0.5 bg-accent-yellow text-[8px] font-black uppercase text-primary-blue rounded">Official Template</span>
                    </div>
                    <div class="w-10 h-10 bg-blue-50 dark:bg-slate-800 rounded-xl flex items-center justify-center text-blue-600 animate-bounce">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </div>
                </div>
                
                <p class="text-xs text-gray-800 dark:text-gray-300 font-bold leading-relaxed">Format your manuscript using our official sample before submission to ensure acceptance.</p>
                
                <a href="{{ asset('JIEEE Paper Template.docx') }}" class="flex items-center justify-center gap-3 px-6 py-4 bg-accent-yellow text-primary-blue rounded-xl font-black uppercase tracking-widest text-[10px] transition-all hover:scale-[1.02] hover:shadow-xl shadow-yellow-500/20 active:scale-95 border-b-4 border-yellow-600">
                    Download Paper Sample
                </a>
            </div>
        </div>
    </div>

    <!-- Technical Tracks Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @php
            $tracks = [
                ['id' => 'T1', 'title' => 'AI & Data Science', 'topics' => ['Artificial Intelligence & Machine Learning', 'Data Analytics & Big Data', 'Natural Language Processing', 'Computer Vision & Intelligent Systems', 'AI for Healthcare, Textile & Agriculture']],
                ['id' => 'T2', 'title' => 'IoT, Robotics & Industry 4.0', 'topics' => ['Industrial IoT Systems & Smart Sensors', 'Robotics & Automation', 'Smart Manufacturing & Industry 4.0', 'Digital Twins & Cyber-Physical Systems', 'Autonomous Systems & Drones']],
                ['id' => 'T3', 'title' => 'Cybersecurity & Emerging Computing', 'topics' => ['Blockchain & Digital Trust', 'Privacy & Data Protection', 'Ethical Hacking & Cyber Forensics', 'Cloud, Edge & Quantum Computing', 'Cryptography & Network Security']],
                ['id' => 'T4', 'title' => 'Sustainable & Smart Technologies', 'topics' => ['Smart Cities & Intelligent Infrastructure', 'Green Computing & Sustainable Tech', 'Energy Monitoring & Optimization', 'Disaster Prediction & Risk Management', 'Smart Transportation & Mobility']]
            ];
        @endphp

        @foreach($tracks as $track)
        <div class="bg-white dark:bg-slate-900/40 p-10 rounded-[2rem] border border-gray-200 dark:border-slate-800 shadow-sm transition-all hover:border-accent-yellow group">
            <div class="flex items-center justify-between mb-6">
                <span class="px-3 py-1 bg-blue-600 text-white rounded-lg text-[10px] font-black italic">{{ $track['id'] }}</span>
                <span class="text-[9px] font-black text-gray-400 uppercase tracking-[0.2em]">Conference Track</span>
            </div>
            <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tight">{{ $track['title'] }}</h3>
            <ul class="space-y-3">
                @foreach($track['topics'] as $topic)
                <li class="flex items-start gap-3 group/item">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-1.5 group-hover/item:bg-accent-yellow transition-colors"></span>
                    <span class="text-sm font-bold text-gray-700 dark:text-gray-300 group-hover/item:text-primary-blue dark:group-hover/item:text-white transition-colors">{{ $topic }}</span>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
<br>
    <!-- High-Contrast Publication Banner -->
    <div class="mt-20 bg-primary-blue dark:bg-black p-10 md:p-16 rounded-[3rem] text-center border border-white/10 shadow-2xl shadow-blue-900/20">
        <div class="max-w-3xl mx-auto space-y-6">
            <p class="text-accent-yellow font-black uppercase tracking-[0.4em] text-[10px]">Publication Partnership</p>
            <h2 class="text-2xl md:text-4xl font-black text-white uppercase tracking-tighter leading-tight">Published in the <span class="italic text-blue-400">JIEEE Journal</span></h2>
            <p class="text-base text-white font-medium leading-relaxed">All accepted papers will be published in the <strong>Journal of Informatics Electrical and Electronics Engineering</strong> following a rigorous peer-review process.</p>
            <div class="inline-flex items-center gap-3 px-5 py-2 bg-white/5 border border-white/10 rounded-xl text-[9px] font-black uppercase tracking-widest text-accent-yellow">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                Hybrid Presentation Mode Available
            </div>
        </div>
    </div>

</div>
@endsection
