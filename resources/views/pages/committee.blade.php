@extends('layouts.conference')

@section('title', 'Committee | ICETA-2026')

@section('content')

<section class="bg-primary-blue dark:bg-black py-20 text-center relative overflow-hidden transition-colors duration-300">
    <div class="relative z-10">
        <h1 class="text-2xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Conference Committees</h1>
        <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">ICETA-2026 Academic Organization</p>
    </div>
</section>

<div class="max-w-[1400px] mx-auto px-6 md:px-12 py-10 md:py-16">
    <div class="flex flex-col lg:flex-row gap-12 xl:gap-20">
        
        <!-- Sidebar Index (Hidden below 1024px) -->
        <aside class="hidden lg:block lg:w-1/4 xl:w-1/5 flex-shrink-0">
            <div class="sticky top-32">
                <div class="border-l-2 border-gray-100 dark:border-slate-800 pl-6 py-2">
                    <h3 class="text-[10px] font-black uppercase tracking-[0.3em] text-gray-300 mb-8 italic">Navigation Index</h3>
                    <nav class="space-y-4 max-h-[60vh] overflow-y-auto custom-scrollbar pr-4">
                        @foreach($committees as $category => $members)
                            <a href="#{{ str($category)->slug() }}" class="group flex items-center gap-3 py-1">
                                <span class="w-1.5 h-1.5 bg-accent-yellow rounded-full opacity-0 group-hover:opacity-100 transition-all flex-shrink-0"></span>
                                <p class="text-[11px] font-black uppercase tracking-wider text-gray-400 group-hover:text-primary-blue dark:group-hover:text-white transition-all">{{ $category }}</p>
                            </a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </aside>

        <!-- Proper Table Content -->
<main class="w-full lg:w-3/4 xl:w-4/5 space-y-16 md:space-y-24">
    <section class="py-20 px-8 bg-slate-50 dark:bg-slate-950">
        <div class="max-w-7xl mx-auto">
            <!-- Chief Patrons Section -->
            <div class="mb-24">
                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Chief Patrons</h2>
                    <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Prof. (Dr.) J.P Panday</h3>
                        <p class="text-gray-500 text-sm italic">Vice Chancellor, AKTU</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Shri. Vidit Jain</h3>
                        <p class="text-gray-500 text-sm italic">Chairman-NITRA Council of Admin</p>
                    </div>
                </div>
            </div>

            <!-- Patron & Convener Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-8 mt-8">
                <!-- Patron -->
                <div class="space-y-4">
                    <div class="text-center">
                        <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-2 uppercase tracking-tight">Patron</h2>
                        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Dr. M.S. Parmar</h3>
                        <p class="text-gray-500 text-sm italic">Director General, NITRA</p>
                    </div>
                </div>

                <!-- Convener -->
                <div class="space-y-4">
                    <div class="text-center">
                        <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-2 uppercase tracking-tight">Convener</h2>
                        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Dr. B.K Sharma</h3>
                        <p class="text-gray-500 text-sm italic">Director, NTC</p>
                    </div>
                </div>

            </div>
        </div>
        
         <div class="space-y-4" style="padding-block:20px">
                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Coordinators</h2>
                    <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Prof. (Dr.) J.P Panday</h3>
                        <p class="text-gray-500 text-sm italic">Vice Chancellor, AKTU</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Shri. Vidit Jain</h3>
                        <p class="text-gray-500 text-sm italic">Chairman-NITRA Council of Admin</p>
                    </div>
                </div>
            </div>

        </section>
            @foreach($committees as $category => $members)
            <section id="{{ str($category)->slug() }}" class="scroll-mt-32 md:scroll-mt-36" style="padding-block:10px">
                <div class="flex items-center gap-4 mb-2 md:mb-8">
                    <h2 class="text-lg md:text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight">{{ $category }}</h2>
                    <div class="h-px flex-1 bg-gray-100 dark:bg-slate-800"></div>
                </div>

                <div class="overflow-x-auto bg-white dark:bg-slate-900 rounded-2xl border border-gray-200 dark:border-slate-800 shadow-xl shadow-blue-900/5">
                    <table class="w-full text-left border-collapse min-w-[500px] md:min-w-0">
                        <thead>
                            <tr class="bg-primary-blue dark:bg-slate-800 text-white border-b border-primary-blue dark:border-slate-700">
                                <th class="py-4 md:py-5 px-6 md:px-8 text-[10px] md:text-[11px] font-black uppercase tracking-widest w-[40%] md:w-1/3 border-r border-white/10">Member Name</th>
                                <th class="py-4 md:py-5 px-6 md:px-8 text-[10px] md:text-[11px] font-black uppercase tracking-widest">Organization / Affiliation</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-slate-800">
                            @foreach($members as $member)
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors even:bg-slate-50/50 dark:even:bg-slate-900/50">
                                <td class="py-4 px-6 md:px-8 text-sm font-bold text-gray-800 dark:text-gray-200 border-r border-gray-200 dark:border-slate-800 leading-tight">
                                    {{ $member->name }}
                                </td>
                                <td class="py-4 px-6 md:px-8 text-[11px] md:text-xs font-semibold text-gray-600 dark:text-gray-400 italic leading-relaxed">
                                    {{ $member->affiliation }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
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
