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
   <section class="py-20 px-8 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Technical Tracks</h2>
            <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Track 1 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T1</span>
                    AI & Data Science
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Machine Learning & Deep Learning</li>
                    <li>• Data Analytics & Big Data</li>
                    <li>• Natural Language Processing & Gen-AI</li>
                    <li>• Computer Vision & Intelligent Systems</li>
                    <li>• AI for Healthcare, Textile & Agriculture</li>
                </ul>
            </div>
            <!-- Track 2 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T2</span>
                    IoT, Robotics & Industry 4.0
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Industrial IoT Systems & Smart Sensors</li>
                    <li>• Robotics & Automation</li>
                    <li>• Smart Manufacturing & Industry 4.0</li>
                    <li>• Digital Twins & Cyber-Physical Systems</li>
                    <li>• Autonomous Systems & Drones</li>
                </ul>
            </div>
            <!-- Track 3 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T3</span>
                    Cybersecurity & Emerging Computing
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Blockchain & Digital Trust</li>
                    <li>• Privacy & Data Protection</li>
                    <li>• Ethical Hacking & Cyber Forensics</li>
                    <li>• Cloud, Edge & Quantum Computing</li>
                    <li>• Cryptography & Network Security</li>
                </ul>
            </div>
            <!-- Track 4 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T4</span>
                    Sustainable & Smart Technologies
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Smart Cities & Intelligent Infrastructure</li>
                    <li>• Green Computing & Sustainable Tech</li>
                    <li>• Energy Monitoring & Optimization</li>
                    <li>• Disaster Prediction & Risk Management</li>
                    <li>• Smart Transportation & Mobility</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<br>
    <!-- High-Contrast Publication Banner -->
    <div class="mt-20 bg-primary-blue dark:bg-black p-10 md:p-16 rounded-[3rem] text-center border border-white/10 shadow-2xl shadow-blue-900/20">
        <div class="max-w-3xl mx-auto space-y-6">
            <p class="text-accent-yellow font-black uppercase tracking-[0.4em] text-[10px]">Publication Partnership</p>
            <h2 class="text-2xl md:text-4xl font-black text-white uppercase tracking-tighter leading-tight">Published in the <span class="italic text-blue-400">JIEEE Journal</span></h2>
            <p class="text-base text-white font-medium leading-relaxed">All accepted papers will be published in the <strong>Journal of Informatics Electrical and Electronics Engineering</strong> following a rigorous peer-review process.</p>
            <div class="flex flex-col md:flex-row justify-center gap-6 pt-4 items-center">
                <a href="https://forms.gle/JGTN1HrSCGYc7CyK7" target="_blank" class="px-10 py-5 bg-accent-yellow text-primary-blue rounded-2xl font-black uppercase tracking-widest text-sm transition-all hover:scale-105 hover:shadow-2xl shadow-yellow-500/40">
                    Register for Conference
                </a>
                <div class="inline-flex items-center gap-3 px-5 py-2 bg-white/5 border border-white/10 rounded-xl text-[9px] font-black uppercase tracking-widest text-accent-yellow">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    Hybrid Presentation Mode Available
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
