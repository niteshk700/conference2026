@extends('layouts.conference')

@section('title', 'Committee | ICETA-2026')

@section('content')
<!-- Minimalist Header -->
<section class="py-24 md:py-32 px-12 text-center bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black text-primary-blue dark:text-white uppercase tracking-tighter mb-6">Conference Committees</h1>
        <p class="text-gray-500 dark:text-gray-400 text-sm md:text-base font-bold uppercase tracking-[0.4em]">ICETA-2026 Academic Organization</p>
        <div class="w-16 h-1.5 bg-accent-yellow mx-auto mt-10 rounded-full"></div>
    </div>
</section>

<div class="max-w-[1500px] mx-auto px-6 md:px-12 pb-24">
    <div class="flex flex-col lg:flex-row gap-12 xl:gap-20">
        
        <!-- Minimalist Sidebar Index -->
        <aside class="hidden lg:block lg:w-1/4 xl:w-1/5">
            <div class="sticky top-32">
                <div class="bg-slate-50/50 dark:bg-slate-800/30 backdrop-blur-md p-8 rounded-[2rem] border border-gray-100 dark:border-slate-800">
                    <h3 class="text-primary-blue dark:text-white font-black uppercase tracking-widest text-[10px] mb-8 flex items-center gap-2">
                        <span class="w-2 h-2 bg-accent-yellow rounded-full"></span>
                        Index
                    </h3>
                    <nav class="space-y-4 max-h-[60vh] overflow-y-auto custom-scrollbar pr-4">
                        @foreach($committees as $category => $members)
                            <a href="#{{ str($category)->slug() }}" class="block group">
                                <p class="text-[10px] font-black uppercase tracking-widest text-gray-400 group-hover:text-primary-blue dark:group-hover:text-accent-yellow transition-all">{{ $category }}</p>
                                <div class="h-0.5 w-0 group-hover:w-full bg-accent-yellow mt-1 transition-all duration-300"></div>
                            </a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </aside>

        <!-- Card-Based Directory Content -->
        <main class="lg:w-3/4 xl:w-4/5 space-y-12">
            @foreach($committees as $category => $members)
            <section id="{{ str($category)->slug() }}" class="scroll-mt-32">
                <div class="bg-white dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700/50 shadow-xl shadow-blue-900/5 overflow-hidden transition-all hover:shadow-blue-900/10 group">
                    
                    <!-- Card Header -->
                    <div class="px-8 md:px-12 py-8 bg-slate-50/50 dark:bg-slate-900/30 border-b border-gray-50 dark:border-slate-700/50 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="space-y-1">
                            <h2 class="text-xl md:text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight">{{ $category }}</h2>
                            <p class="text-[10px] font-bold text-blue-500 uppercase tracking-widest">Committee Board</p>
                        </div>
                        <div class="px-4 py-1.5 bg-white dark:bg-slate-800 rounded-full border border-gray-100 dark:border-slate-700">
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ $members->count() }} Members</span>
                        </div>
                    </div>

                    <!-- Card Body: Two-Column Member Grid -->
                    <div class="p-8 md:p-12">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                            @foreach($members as $member)
                            <div class="flex items-start gap-4 pb-6 border-b border-gray-50 dark:border-slate-700/30 last:border-0 md:[&:nth-last-child(2)]:border-0 md:last:border-0">
                                <span class="text-[10px] font-black text-gray-200 dark:text-slate-600 mt-1 italic">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <div class="space-y-1.5">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <h3 class="text-sm md:text-base font-bold text-primary-blue dark:text-white group-hover:text-blue-600 transition-colors">{{ $member->name }}</h3>
                                        <span class="text-[9px] font-black px-2 py-0.5 bg-blue-50 dark:bg-blue-900/30 text-blue-500 rounded uppercase tracking-tighter">
                                            {{ $member->role ?? 'Member' }}
                                        </span>
                                    </div>
                                    <p class="text-[11px] md:text-xs text-gray-500 dark:text-gray-400 leading-relaxed font-medium">{{ $member->affiliation }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
        </main>

    </div>
</div>

<style>
    html {
        scroll-behavior: smooth;
    }
    .custom-scrollbar::-webkit-scrollbar {
        width: 3px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e2e8f0;
        border-radius: 10px;
    }
    .dark .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #334155;
    }
</style>

@endsection
