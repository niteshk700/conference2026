@extends('layouts.conference')

@section('title', 'Home | ICETA-2026')

@section('content')
<style>
    .flip-card {
        background-color: transparent;
        width: 100%;
        max-width: 360px;
        height: 540px;
        aspect-ratio: 1/1.2;
        perspective: 1000px;
    }
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        transform-style: preserve-3d;
        box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        border-radius: 2.2rem;
    }
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 2.2rem;
        border: 1px solid rgba(226, 232, 240, 0.8);
    }
    .dark .flip-card-front, .dark .flip-card-back {
        border-color: rgba(51, 65, 85, 0.5);
    }
    .flip-card-front {
        background-color: #ffffff;
        color: #0f172a;
        padding: 1.8rem 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .dark .flip-card-front {
        background-color: #1e293b;
        color: #ffffff;
    }
    .flip-card-back {
        background-color: #0f172a;
        color: #ffffff;
        transform: rotateY(180deg);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 2rem 1.8rem;
    }
    .dark .flip-card-back {
        background-color: #020617;
    }
    /* Modern Scrollbar Styling */
    .modern-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .modern-scrollbar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
    }
    .modern-scrollbar::-webkit-scrollbar-thumb {
        background: #eab308; /* accent-yellow */
        border-radius: 10px;
    }
    .modern-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #ca8a04;
    }
</style>

<!-- Hero Section -->
<section class="relative min-h-[60vh] flex flex-col justify-center items-center text-center text-white px-2 overflow-hidden bg-primary-blue dark:bg-black transition-colors duration-300 py-10">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="Conference Background" class="w-full h-full object-cover opacity-30 dark:opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-primary-blue/90 to-primary-blue dark:from-black/90 dark:to-black"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-5xl animate-fade-in">
        <div class="mb-4 flex flex-col items-center">
            <span class="inline-block px-2 py-1 bg-accent-yellow text-primary-blue font-black text-[10px]  tracking-[0.4em] mb-2 rounded-full">College Code: 802</span>
            <p class="text-2xl md:text-3xl font-black mb-3 leading-tight  tracking-tighter">{{  'International Conference on' }}</p>
            <h1 class="text-2xl md:text-3xl font-black mb-3 leading-tight  tracking-tighter">{{ $settings['hero_title'] ?? 'Emerging Technologies & its Applications' }}</h1>
            <p class="text-lg md:text-xl font-bold mb-4 text-white/80 dark:text-gray-400  tracking-[0.5em]">(ICETA-2026)</p>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center gap-3 mb-6">
            <div class="bg-white/5 backdrop-blur-xl px-5 py-3 rounded-2xl border border-white/10">
                <p class="text-accent-yellow text-[10px]  font-black tracking-widest mb-1">Conference Dates</p>
                <p class="text-lg font-black italic">17<sup>th</sup> - 18<sup>th</sup> July 2026</p>
            </div>
            <div class="bg-white/5 backdrop-blur-xl px-5 py-3 rounded-2xl border border-white/10">
                <p class="text-accent-yellow text-[10px]  font-black tracking-widest mb-1">Venue</p>
                <p class="text-lg font-black">NTC, Ghaziabad</p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('registration') }}" class="px-5 py-2.5 bg-accent-yellow text-primary-blue rounded-xl font-black  tracking-widest transition-all hover:scale-105 shadow-2xl shadow-yellow-500/20 text-xs">Registration</a>
            <a href="{{ route('call-for-paper') }}" class="px-5 py-2.5 bg-accent-yellow text-primary-blue rounded-xl font-black  tracking-widest transition-all hover:scale-105 shadow-2xl shadow-yellow-500/20 text-xs">Call for Papers</a>
        </div>
    </div>
</section>

<!-- Sponsors Marquee -->
<div class="bg-white dark:bg-slate-900 py-3 border-y border-gray-100 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 flex flex-wrap justify-center items-center gap-6 opacity-60 grayscale hover:grayscale-0 transition-all">
        <p class="text-[10px] font-black  tracking-widest text-gray-400">Sponsored By:</p>
        <span class="text-xs font-bold text-gray-600 dark:text-gray-300">Dr. A.P.J. Abdul Kalam Technical University, Lucknow</span>
    </div>
</div>

<!-- Leadership Section -->
<div class="max-w-7xl mx-auto py-6 px-4 bg-slate-50 dark:bg-slate-900/50 rounded-[3rem] border border-gray-100 dark:border-slate-800/80 my-4">
    
    <!-- Chief Guest Card (Horizontal, Large & Ultra-Premium) -->
    <div class="mb-6 border-b border-gray-200/50 dark:border-slate-800/50 pb-4">
        <div class="text-center mb-3">
            <span class="inline-block px-3 py-1 bg-accent-yellow/20 dark:bg-accent-yellow/10 text-primary-blue dark:text-accent-yellow font-black text-[9px]  tracking-[0.3em] mb-1 rounded-full border border-accent-yellow/30">Chief Guest</span>
            <h2 class="text-xl font-black text-primary-blue dark:text-white  tracking-tight">Guest of Honour</h2>
            <div class="w-16 h-1 bg-accent-yellow mx-auto mt-1"></div>
        </div>

        <div class="max-w-5xl mx-auto bg-white dark:bg-slate-900 rounded-[2.5rem] p-6 sm:p-8 shadow-2xl border border-gray-100 dark:border-slate-800 transition-all hover:scale-[1.01] hover:shadow-2xl">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <!-- Portrait Image (2x Size) -->
                <div class="relative w-40 h-44 sm:w-48 sm:h-56 flex-shrink-0 overflow-hidden rounded-[2rem] shadow-xl border-2 border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-850">
                    <img src="{{ asset('assets/images/guest/Sr. Sunil Kumar Sharma.png') }}" alt="Sh. Sunil Sharma" class="w-full h-full object-cover object-top">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-blue/20 via-transparent to-transparent opacity-60"></div>
                </div>

                <!-- Content Details (Right, 2x Size) -->
                <div class="flex-1 text-center md:text-left space-y-4">
                    <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
                        <h3 class="text-2xl sm:text-4xl font-black text-primary-blue dark:text-white leading-tight">Sh. Sunil Sharma</h3>
                          </div>
                    
                    <p class="text-sm sm:text-lg text-slate-800 dark:text-slate-100 italic bg-amber-500/5 dark:bg-accent-yellow/5 p-10 rounded-2xl border-l-4 border-accent-yellow leading-relaxed text-justify">
                        "<strong>Sh. Sunil Sharma</strong>, Hon'ble Minister of Electronics & Information Technology, Government of Uttar Pradesh, will inaugurate the conference."
                    </p>
                </div>
            </div>
        </div>
    </div>

            <!-- Chief Patrons Section -->
            <div class="mb-12">
                <div class="text-center mb-4">
                    <h2 class="text-xl md:text-2xl font-black text-primary-blue dark:text-white mb-2  tracking-tight">Chief Patrons</h2>
                    <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-2 border-2 border-slate-100 dark:border-slate-700 shadow-md bg-slate-50 dark:bg-slate-850 flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('assets/images/Prof. (Dr.) J.P Panday.jpg') }}" alt="Prof. (Dr.) J.P Panday" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-base font-black text-primary-blue dark:text-white mb-1">Prof. (Dr.) J.P Panday</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px] italic">Vice Chancellor, AKTU</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-2 border-2 border-slate-100 dark:border-slate-700 shadow-md bg-slate-50 dark:bg-slate-850 flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('assets/images/Shri. Vidit Jain.png') }}" alt="Shri. Vidit Jain" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-base font-black text-primary-blue dark:text-white mb-1">Shri. Vidit Jain</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px] italic">Chairman-NITRA Council of Admin</p>
                    </div>
                </div>
            </div>

            <!-- Patron & Convener Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-4 mt-4 mb-12">
                <!-- Patron -->
                <div class="space-y-2">
                    <div class="text-center">
                        <h2 class="text-xl md:text-2xl font-black text-primary-blue dark:text-white mb-1  tracking-tight">Patron</h2>
                        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-2 border-2 border-slate-100 dark:border-slate-700 shadow-md bg-slate-50 dark:bg-slate-850 flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('assets/images/Dr. M.S. Parmar.png') }}" alt="Dr. M.S. Parmar" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-base font-black text-primary-blue dark:text-white mb-1">Dr. M.S. Parmar</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px] italic">Director General, NITRA</p>
                    </div>
                </div>

                <!-- Convener -->
                <div class="space-y-2">
                    <div class="text-center">
                        <h2 class="text-xl md:text-2xl font-black text-primary-blue dark:text-white mb-1  tracking-tight">Convener</h2>
                        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-2 border-2 border-slate-100 dark:border-slate-700 shadow-md bg-slate-50 dark:bg-slate-850 flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('assets/images/Dr. B.K Sharma.png') }}" alt="Dr. B.K Sharma" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-base font-black text-primary-blue dark:text-white mb-1">Dr. B.K Sharma</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px] italic">Director, NTC</p>
                    </div>
                </div>
            </div>

            <!-- Coordinators Section -->
            <div>
                <div class="text-center mb-4">
                    <h2 class="text-xl md:text-2xl font-black text-primary-blue dark:text-white mb-2  tracking-tight">Coordinators</h2>
                    <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-2 border-2 border-slate-100 dark:border-slate-700 shadow-md bg-slate-50 dark:bg-slate-850 flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('assets/images/k k dewan.jpeg') }}" alt="Mr. K.K Dewan" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-base font-black text-primary-blue dark:text-white mb-1">Mr. K.K Dewan</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px] italic">Registrar</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-2 border-2 border-slate-100 dark:border-slate-700 shadow-md bg-slate-50 dark:bg-slate-850 flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('assets/images/Dr.-Anand-P.-Srivastava (1).png') }}" alt="Dr. A.P Srivastava" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-base font-black text-primary-blue dark:text-white mb-1">Dr. A.P Srivastava</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px] italic">Head of Department (CSE)</p>
                    </div>
                </div>
            </div>
</div>

<!-- Keynote Speaker Section -->
<section class="py-12 px-4 bg-slate-50 dark:bg-slate-900 border-t border-gray-100 dark:border-slate-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-8">
            <span class="inline-block px-3 py-1 bg-accent-yellow/20 dark:bg-accent-yellow/10 text-primary-blue dark:text-accent-yellow font-black text-[10px]  tracking-[0.3em] mb-2 rounded-full border border-accent-yellow/30">Distinguished Speakers</span>
            <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white  tracking-tight">Keynote Speakers</h2>
            <div class="w-20 h-1.5 bg-accent-yellow mx-auto mt-2"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 justify-items-center justify-center">
            
            <!-- Speaker 1: Dr. Manoj Sharma -->
            <div class="flip-card group mx-auto">
                <div class="flip-card-inner">
                    <!-- Front Face -->
                    <div class="flip-card-front shadow-2xl">
                        <!-- Portrait Image -->
                        <div class="relative w-60 h-72 max-w-full mx-auto overflow-hidden rounded-2xl shadow-lg border-2 border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-850">
                            <img src="{{ asset('assets/images/speaker/Manoj Sharma Photo.jpeg') }}" alt="Dr. Manoj Sharma" class="w-full h-full object-cover object-top transition-transform duration-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-blue/30 via-transparent to-transparent opacity-60"></div>
                        </div>

                        <!-- Details -->
                        <div class="text-center space-y-2 py-4">
                            <h3 class="text-xl font-black text-primary-blue dark:text-white leading-tight">Dr. Manoj Sharma, PhD</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-[10px] font-black  tracking-[0.15em]">Retired Biostatistics Leader, USA</p>
                            <div class="h-0.5 w-12 bg-accent-yellow mx-auto my-2"></div>
                            
                            <div class="flex items-center justify-center gap-2 mb-2">
                                <span class="px-2.5 py-0.5 bg-accent-yellow/20 text-primary-blue dark:text-accent-yellow text-[8px] font-black  tracking-wider rounded border border-accent-yellow/30 shadow-sm">Keynote Address</span>
                                <span class="px-2.5 py-0.5 bg-blue-600/10 text-blue-600 dark:text-blue-400 text-[8px] font-black  tracking-wider rounded border border-blue-600/20 shadow-sm">Biostatistics</span>
                            </div>

                            <div class="flex items-center justify-center gap-1.5 text-blue-600 dark:text-accent-yellow text-[10px] font-black  tracking-widest animate-pulse pt-2">
                                <span>Hover to see Bio</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Back Face -->
                    <div class="flip-card-back shadow-2xl">
                        <div>
                            <h3 class="text-accent-yellow font-black text-base  tracking-[0.15em] text-center">Dr. Manoj Sharma, PhD</h3>
                            <p class="text-slate-400 text-[9px] font-black  tracking-[0.2em] text-center mt-1">Retired Biostatistics Leader</p>
                            <div class="w-16 h-0.5 bg-accent-yellow mx-auto my-4"></div>
                        </div>
                        
                        <div class="modern-scrollbar text-[11px] leading-relaxed space-y-4 font-semibold text-slate-200 overflow-y-auto max-h-[320px] pr-2 text-justify">
                            <p>
                                <strong>Manoj Sharma PhD</strong> is a retired Biostatistics professional with <strong>40+ years of experience</strong> in the application of statistics in healthcare research and medical device development for the diagnosis and monitoring of disease states.
                            </p>
                            <p>
                                Motivated by continuous learning, he took mid-career breaks to pursue a <strong>PhD in Statistics</strong> at the University of Maryland at Baltimore County (UMBC), USA, after 10 years in the prestigious <strong>Indian Statistical Service</strong>, and an <strong>MS in Biomedical Informatics</strong> at <strong>Stanford University</strong>, USA, after 18+ years of dedicated work at <strong>Johnson & Johnson Co.</strong>
                            </p>
                            <p>
                                His rich international career spans multinational operations in India, China, and the USA, cooperating with cross-functional global teams to engineer novel, technology-driven healthcare solutions. In India, Manoj led the <strong>National Sample Survey Organization (NSSO)</strong> Regional Offices in Delhi and prior to that Jaipur as an ISS officer.
                            </p>
                            <p>
                                In the United States, he spearheaded medical device development at <strong>LifeScan Inc. (a Johnson & Johnson Co.)</strong>, and led Assay Biostatistics for validation of early multi-cancer detection, cancer monitoring through <strong>Minimal Residual Disease (MRD)</strong>, and immuno-assay development at industry-leading companies such as <strong>Grail Inc.</strong> and <strong>Adaptive Biotechnologies</strong>.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-slate-800 w-full flex items-center justify-center gap-1.5 text-[9px] font-black text-slate-500  tracking-widest">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                            <span>Hover away to exit</span>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Speaker 3: Prof. Dr. Sandeep Poddar -->
            <div class="flip-card group mx-auto">
                <div class="flip-card-inner">
                    <!-- Front Face -->
                    <div class="flip-card-front shadow-2xl">
                        <!-- Portrait Image -->
                        <div class="relative w-60 h-72 max-w-full mx-auto overflow-hidden rounded-2xl shadow-lg border-2 border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-850">
                            <img src="{{ asset('assets/images/speaker/Dr Sandeep Poddar.png') }}" alt="Prof. Dr. Sandeep Poddar" class="w-full h-full object-cover object-top transition-transform duration-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-blue/30 via-transparent to-transparent opacity-60"></div>
                        </div>

                        <!-- Details -->
                        <div class="text-center space-y-2 py-4">
                            <h3 class="text-xl font-black text-primary-blue dark:text-white leading-tight">Prof. Dr. Sandeep Poddar</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-[10px] font-black  tracking-[0.15em]">Lincoln University College, Malaysia</p>
                            <div class="h-0.5 w-12 bg-accent-yellow mx-auto my-2"></div>
                            
                            <div class="flex items-center justify-center gap-2 mb-2">
                                <span class="px-2.5 py-0.5 bg-accent-yellow/20 text-primary-blue dark:text-accent-yellow text-[8px] font-black  tracking-wider rounded border border-accent-yellow/30 shadow-sm">Keynote Address</span>
                                <span class="px-2.5 py-0.5 bg-blue-600/10 text-blue-600 dark:text-blue-400 text-[8px] font-black  tracking-wider rounded border border-blue-600/20 shadow-sm">Academic Leader</span>
                            </div>

                            <div class="flex items-center justify-center gap-1.5 text-blue-600 dark:text-accent-yellow text-[10px] font-black  tracking-widest animate-pulse pt-2">
                                <span>Hover to see Bio</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Back Face -->
                    <div class="flip-card-back shadow-2xl">
                        <div>
                            <h3 class="text-accent-yellow font-black text-base  tracking-[0.15em] text-center">Prof. Dr. Sandeep Poddar</h3>
                            <p class="text-slate-400 text-[9px] font-black  tracking-[0.2em] text-center mt-1">Lincoln University College, Malaysia</p>
                            <div class="w-16 h-0.5 bg-accent-yellow mx-auto my-4"></div>
                        </div>
                        
                        <div class="modern-scrollbar text-[11px] leading-relaxed space-y-4 font-semibold text-slate-200 overflow-y-auto max-h-[320px] pr-2 text-justify">
                            <p>
                                <strong>Dr. Sandeep Poddar</strong>, Deputy Vice Chancellor (Research & Innovation) also served as Senior Research Director and Executive Editor (Publications), Lincoln University College, Malaysia. He also serves as Adjunct Faculty (Honorary), Bharat Center Canada, Visiting Professor, Universitas Mandala Waluya, Indonesia, and Adjunct Faculty, Techno India NJR Institute, Udaipur, India.
                            </p>
                            <p>
                                He graduated from University of Calcutta in 1993 with Honours in Zoology, obtained a PG Diploma in Dietetics from All India Institute of Hygiene and Public Health (1995), an MS in Zoology with specialization in Biochemical Genetics from Dayalbagh Educational Institute (1998 with distinction), completed his PhD in Zoology from Vivekananda Institute of Medical Sciences (2004) on Cytotoxicity, and obtained an MBA from Lincoln University College in 2021.
                            </p>
                            <p>
                                He has published more than <strong>300 research papers</strong> in reputed Scopus/WoS indexed journals, filed 15+ patents, and serves as Guest Editor for publishers like Elsevier, Frontiers, and Bentham. Dr. Poddar is founder Secretary of Dr. Tarak Nath Podder Memorial Foundation and active member of major global scientific organizations including ISCA, MSMBB, and TWAS.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-slate-800 w-full flex items-center justify-center gap-1.5 text-[9px] font-black text-slate-500  tracking-widest">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                            <span>Hover away to exit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Speaker 2: Mr. Yogendra Pahariya -->
            <div class="flip-card group mx-auto">
                <div class="flip-card-inner">
                    <!-- Front Face -->
                    <div class="flip-card-front shadow-2xl">
                        <!-- Portrait Image -->
                        <div class="relative w-60 h-72 max-w-full mx-auto overflow-hidden rounded-2xl shadow-lg border-2 border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-850">
                            <img src="{{ asset('assets/images/speaker/Mr. Yogendra Pahariya.png') }}" alt="Mr. Yogendra Pahariya" class="w-full h-full object-cover object-top transition-transform duration-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-blue/30 via-transparent to-transparent opacity-60"></div>
                        </div>

                        <!-- Details -->
                        <div class="text-center space-y-2 py-4">
                            <h3 class="text-xl font-black text-primary-blue dark:text-white leading-tight">Mr. Yogendra Pahariya</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-[10px] font-black  tracking-[0.15em]">Farnborough, England, UK</p>
                            <div class="h-0.5 w-12 bg-accent-yellow mx-auto my-2"></div>
                            
                            <div class="flex items-center justify-center gap-2 mb-2">
                                <span class="px-2.5 py-0.5 bg-accent-yellow/20 text-primary-blue dark:text-accent-yellow text-[8px] font-black  tracking-wider rounded border border-accent-yellow/30 shadow-sm">Keynote Address</span>
                                <span class="px-2.5 py-0.5 bg-blue-600/10 text-blue-600 dark:text-blue-400 text-[8px] font-black  tracking-wider rounded border border-blue-600/20 shadow-sm">Tech Leader</span>
                            </div>

                            <div class="flex items-center justify-center gap-1.5 text-blue-600 dark:text-accent-yellow text-[10px] font-black  tracking-widest animate-pulse pt-2">
                                <span>Hover to see Bio</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Back Face -->
                    <div class="flip-card-back shadow-2xl">
                        <div>
                            <h3 class="text-accent-yellow font-black text-base  tracking-[0.15em] text-center">Mr. Yogendra Pahariya</h3>
                            <p class="text-slate-400 text-[9px] font-black  tracking-[0.2em] text-center mt-1">Keynote Speaker</p>
                            <div class="w-16 h-0.5 bg-accent-yellow mx-auto my-4"></div>
                        </div>
                        
                        <div class="modern-scrollbar text-[11px] leading-relaxed space-y-4 font-semibold text-slate-200 overflow-y-auto max-h-[320px] pr-2 text-justify">
                            <p>
                                <strong>Yogendra Pahariya</strong> is an accomplished Technology and Software Engineering Leader based in <strong>Farnborough, England, United Kingdom</strong>, with extensive experience in architecting cutting-edge digital products and pioneering enterprise systems.
                            </p>
                            <p>
                                Throughout his distinguished career, he has successfully spearheaded global engineering teams to deliver high-performance, robust, and highly scalable cloud platforms and database systems for diverse industries across the UK and Europe.
                            </p>
                            <p>
                                He is deeply passionate about continuous learning and the execution of emerging technologies, focusing on cloud-native solutions, agile delivery methodologies, and advanced computing paradigms to drive organizational excellence.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-slate-800 w-full flex items-center justify-center gap-1.5 text-[9px] font-black text-slate-500  tracking-widest">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                            <span>Hover away to exit</span>
                        </div>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</section>
<!-- About Sections -->
<section class="py-10 px-4 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- About Conference -->
        <div class="space-y-4">
            <h2 class="text-3xl font-black text-primary-blue dark:text-white leading-tight">About the <span class="text-blue-600 italic">Conference</span></h2>
            <div class="space-y-3 text-gray-600 dark:text-gray-400 leading-relaxed text-md">
                <p style="text-align: justify;">The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators to exchange knowledge and insights on the latest advancements in emerging technologies. The conference focuses on areas such as Artificial Intelligence, IoT, Robotics, Cybersecurity, Cloud Computing, and Data Analytics, highlighting their applications in solving real-world challenges. It provides a multidisciplinary platform for discussing innovations, trends, and practical implementations across sectors like Textile, healthcare, agriculture, smart cities, and sustainability. ICETA-2026 encourages collaboration, research excellence, and the development of innovative, technology-driven solutions for a sustainable and digitally empowered future.</div>
        </div>
        <!-- About Institute -->
        <div class="space-y-4">
            <h2 class="text-3xl font-black text-primary-blue dark:text-white leading-tight">About the <span class="text-accent-yellow italic">Institute</span></h2>
            <div class="space-y-3 text-gray-600 dark:text-gray-400 leading-relaxed text-md">
                <p style="text-align: justify;">NITRA Technical Campus (NTC), Ghaziabad, is the academic wing of the Northern India Textile Research Association (NITRA), a premier institute established in 1974 by the Government of India and the textile industry. Affiliated with reputed bodies, NTC offers quality engineering and technology programs with a strong focus on innovation and industry relevance. The campus provides a dynamic learning environment supported by experienced faculty, modern infrastructure, and research-driven practices. It promotes interdisciplinary learning, skill development, and real-world exposure, aiming to nurture competent professionals with strong ethical values and a commitment to technological advancement.
</p></div>
        </div>
    </div>
</section>




<!-- Objectives Section -->
<section class="py-10 bg-primary-blue dark:bg-black text-white px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-8">
            <p class="text-accent-yellow font-black text-[10px]  tracking-[0.3em] mb-2">Core Mission</p>
            <h2 class="text-3xl font-black  tracking-tight">Conference Objectives</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="p-4 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-3 flex items-center justify-center text-primary-blue font-black">01</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Promote advanced research in Emerging Technologies like AI, IoT, Textile, Robotics, and Data Analytics.</p>
            </div>
            <div class="p-4 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-3 flex items-center justify-center text-primary-blue font-black">02</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Encourage interdisciplinary collaboration among academia, industry, and policymakers.</p>
            </div>
            <div class="p-4 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-3 flex items-center justify-center text-primary-blue font-black">03</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Address real-world challenges in sectors such as healthcare, agriculture, and smart cities.</p>
            </div>
            <div class="p-4 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-3 flex items-center justify-center text-primary-blue font-black">04</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Strengthen academia–industry partnerships for innovation and knowledge transfer.</p>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Tracks Section -->
<section class="py-10 px-4 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4  tracking-tight">Technical Tracks</h2>
            <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Track 1 -->
            <div class="p-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-3  tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T1</span>
                    AI & Data Science
                </h3>
                <ul class="space-y-1.5 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Machine Learning & Deep Learning</li>
                    <li>• Data Analytics & Big Data</li>
                    <li>• Natural Language Processing & Gen-AI</li>
                    <li>• Computer Vision & Intelligent Systems</li>
                    <li>• AI for Healthcare, Textile & Agriculture</li>
                </ul>
            </div>
            <!-- Track 2 -->
            <div class="p-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-3  tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T2</span>
                    IoT, Robotics & Industry 4.0
                </h3>
                <ul class="space-y-1.5 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Industrial IoT Systems & Smart Sensors</li>
                    <li>• Robotics & Automation</li>
                    <li>• Smart Manufacturing & Industry 4.0</li>
                    <li>• Digital Twins & Cyber-Physical Systems</li>
                    <li>• Autonomous Systems & Drones</li>
                </ul>
            </div>
            <!-- Track 3 -->
            <div class="p-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-3  tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T3</span>
                    Cybersecurity & Emerging Computing
                </h3>
                <ul class="space-y-1.5 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Blockchain & Digital Trust</li>
                    <li>• Privacy & Data Protection</li>
                    <li>• Ethical Hacking & Cyber Forensics</li>
                    <li>• Cloud, Edge & Quantum Computing</li>
                    <li>• Cryptography & Network Security</li>
                </ul>
            </div>
            <!-- Track 4 -->
            <div class="p-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-3  tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T4</span>
                    Sustainable & Smart Technologies
                </h3>
                <ul class="space-y-1.5 text-sm text-gray-600 dark:text-gray-400 font-medium">
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

<!-- Guidelines Section -->
<section class="py-10 px-4 bg-slate-50 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="space-y-4">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white  tracking-tighter">Abstract Guidelines</h2>
            <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl border border-gray-100 dark:border-slate-800 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                <p>• <strong>Length:</strong> 200–300 words</p>
                <p>• <strong>Required:</strong> Purpose/Objectives, Methodology, Key Findings</p>
                <p>• <strong>Keywords:</strong> 4–6 keywords at the end</p>
                <p class="pt-4 border-t border-gray-50 dark:border-slate-800 text-blue-600 font-bold  text-[10px]">Manuscript Requirements</p>
                <p>• <strong>Paper length:</strong> 3000–6000 words</p>
                <p>• <strong>Format:</strong> APA style (latest edition)</p>
                <p>• <strong>Font:</strong> Times New Roman, Size 12, 1.5 spacing</p>
            </div>
        </div>
        <div class="space-y-4">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white  tracking-tighter">Publication</h2>
            <div class="bg-primary-blue text-white p-4 rounded-2xl shadow-2xl shadow-blue-900/40 space-y-3">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-accent-yellow rounded-xl flex items-center justify-center text-primary-blue text-xl">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9 4.804A7.994 7.994 0 0111 4c1.068 0 2.082.209 3 .588V13c-.918-.379-1.932-.588-3-.588-1.068 0-2.082.209-3 .588V4.804zM3 13V4.804A7.994 7.994 0 015 4c1.068 0 2.082.209 3 .588V13c-.918-.379-1.932-.588-3-.588-1.068 0-2.082.209-3 .588zM17 13.5l-2-1V5l2 1v7.5zm-14-1V5l2-1v7.5l-2 1z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold italic">JIEEE Partnership</h3>
                </div>
                <p class="text-blue-100 leading-relaxed">All accepted papers will be published in the <strong>Journal of Informatics Electrical and Electronics Engineering (JIEEE)</strong> following a rigorous peer-review process.</p>
                
            </div>
        </div>
    </div>
</section>

<!-- Registration & Important Dates -->
<section class="py-10 px-4 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl font-black text-primary-blue dark:text-white mb-5  tracking-tighter">Timeline</h2>
            <div class="space-y-3">
                @foreach($dates as $item)
                <div class="flex items-center justify-between p-1 rounded-1xl {{ $item->is_highlighted ? 'bg-blue-600 text-white shadow-xl shadow-blue-900/20' : 'bg-slate-50 dark:bg-slate-900 border border-gray-100 dark:border-slate-800' }}">
                    <span class="text-sm font-black  tracking-widest">{{ $item->label }}</span>
                    <span class="font-bold {{ $item->is_highlighted ? 'text-accent-yellow' : 'text-primary-blue dark:text-blue-400' }}">{!! $item->date_value !!}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="text-2xl font-black text-primary-blue dark:text-white mb-5  tracking-tighter">Registration Process</h2>
            <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl border border-gray-100 dark:border-slate-800 space-y-4">
                <div class="flex items-center justify-between border-b dark:border-slate-800 pb-2">
                    <span class="font-bold text-gray-500">Registration Fee</span>
                    <span class="text-2xl font-black text-primary-blue dark:text-accent-yellow">₹1500</span>
                </div>
                <ol class="space-y-4 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex gap-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 text-[10px] font-black">1</span>
                        <span>Complete the <a href="https://forms.gle/JGTN1HrSCGYc7CyK7" target="_blank" class="text-blue-600 dark:text-blue-400 font-bold underline">Online Registration Form</a>.</span>
                    </li>
                    <li class="flex gap-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 text-[10px] font-black">2</span>
                        <span>Make payment via NEFT/UPI/IMPS (<a href="{{ route('registration') }}" class="text-blue-600 dark:text-blue-400 font-bold underline">View Bank Details</a>).</span>
                    </li>
                    <li class="flex gap-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 text-[10px] font-black">3</span>
                        <span>Upload payment confirmation screenshot in the form.</span>
                    </li>
                </ol>

                <!-- Quick QR Payment -->
                <div class="pt-6 border-t dark:border-slate-800 text-center">
                    <p class="text-[10px] font-black text-gray-400  tracking-widest mb-4 text-left">Quick UPI Payment</p>
                    <div class="bg-gray-50 dark:bg-slate-800 p-3 rounded-xl inline-block border border-gray-100 dark:border-slate-700">
                        <img src="{{ asset('qr.png') }}" alt="Payment QR" >
                    </div>
                    <p class="text-[9px] font-bold text-gray-500 mt-2">Scan with GPay, PhonePe or Paytm</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

