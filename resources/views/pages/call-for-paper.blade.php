@extends('layouts.conference')

@section('title', 'Call for Papers | ICETA-2026')

@section('content')
<!-- Page Title -->
<section class="bg-primary-blue dark:bg-black py-20 text-center transition-colors duration-300">
    <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Call for Papers</h1>
    <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Join the Technical Discourse</p>
</section>

<!-- Page Content -->
<section class="py-24 px-8">
    <div class="max-w-7xl mx-auto prose dark:prose-invert prose-blue max-w-none">
        @if($page && $page->content)
            {!! $page->content !!}
        @else
            <!-- Fallback Tracks -->
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-4 transition-colors duration-300">Technical Tracks</h2>
                <div class="w-16 h-1.5 bg-accent-yellow mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $tracks = [
                        ['title' => 'AI & Data Science', 'items' => ['Artificial Intelligence, ML & Deep Learning', 'Data Analytics, Predictive Modelling', 'Natural Language Processing & GenAI', 'Computer Vision & Intelligent Systems', 'AI for Healthcare, Agriculture & Education']],
                        ['title' => 'IoT, Robotics & Industry 4.0', 'items' => ['Industrial IoT Systems & Smart Sensors', 'Robotics & Automation', 'Smart Manufacturing & Industry 4.0', 'Digital Twins & Cyber-Physical Systems', 'Autonomous Systems & Drones']],
                        ['title' => 'Cybersecurity', 'items' => ['Blockchain & Digital Trust Mechanisms', 'Cybersecurity, Privacy & Data Protection', 'Ethical Hacking & Cyber Forensics', 'Cloud, Edge & Quantum Computing', 'Cryptography & Network Security']],
                        ['title' => 'Sustainable Tech', 'items' => ['Smart Cities & Intelligent Infrastructure', 'Green Computing & Sustainable Tech', 'Energy Monitoring & Optimization', 'Disaster Prediction & Risk Management', 'Technology for Social Good & Governance']],
                    ];
                @endphp

                @foreach($tracks as $track)
                <div class="bg-white dark:bg-slate-800 p-10 rounded-3xl shadow-xl shadow-blue-900/5 dark:shadow-none border border-gray-100 dark:border-slate-700 transition-all duration-300 hover:border-blue-200 dark:hover:border-blue-600">
                    <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 flex items-center gap-3 transition-colors duration-300">
                        <div class="w-8 h-8 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center text-blue-600 dark:text-blue-400 text-sm">#</div>
                        {{ $track['title'] }}
                    </h3>
                    <ul class="space-y-4">
                        @foreach($track['items'] as $item)
                        <li class="flex items-start gap-3 group text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-accent-yellow mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-sm font-medium leading-relaxed group-hover:text-primary-blue dark:group-hover:text-white transition-colors">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>

            <div class="mt-24 text-center space-y-8 bg-slate-50 dark:bg-slate-900/50 p-16 rounded-[3rem]">
                <h2 class="text-3xl font-black text-primary-blue dark:text-white uppercase tracking-tight transition-colors duration-300">Publication Opportunities</h2>
                <div class="w-16 h-1.5 bg-accent-yellow mx-auto"></div>
                <p class="text-xl font-bold text-blue-600 dark:text-blue-400">All accepted papers will be published in the Journal of Informatics Electrical and Electronics Engineering (JIEEE).</p>
                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto">Selected high-quality papers will be recommended for publication in reputed national and international journals.</p>
            </div>
        @endif
    </div>
</section>
@endsection
