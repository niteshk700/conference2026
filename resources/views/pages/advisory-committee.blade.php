@extends('layouts.conference')

@section('title', 'Advisory Committee | ICETA-2026')

@section('content')

<section class="bg-primary-blue dark:bg-black py-20 text-center relative overflow-hidden transition-colors duration-300">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    <div class="relative z-10">
        <h1 class="text-2xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Advisory Committee</h1>
        <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">ICETA-2026 — Distinguished Advisors & Experts</p>
    </div>
</section>

<div class="max-w-[1400px] mx-auto px-6 md:px-12 py-10 md:py-16">

   
    {{-- Members Table --}}
    <div class="overflow-x-auto bg-white dark:bg-slate-900 rounded-2xl border border-gray-200 dark:border-slate-800 shadow-xl shadow-blue-900/5">
        <table class="w-full text-left border-collapse min-w-[500px] md:min-w-0">
            <thead>
                <tr class="bg-primary-blue dark:bg-slate-800 text-white border-b border-primary-blue dark:border-slate-700">
                    <th class="py-4 md:py-5 px-6 md:px-8 text-[10px] md:text-[11px] font-black uppercase tracking-widest w-8 border-r border-white/10">#</th>
                    <th class="py-4 md:py-5 px-6 md:px-8 text-[10px] md:text-[11px] font-black uppercase tracking-widest w-[38%] md:w-1/3 border-r border-white/10">Member Name</th>
                    <th class="py-4 md:py-5 px-6 md:px-8 text-[10px] md:text-[11px] font-black uppercase tracking-widest">Organization / Affiliation</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-slate-800">
                @foreach($advisoryMembers as $index => $member)
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors even:bg-slate-50/50 dark:even:bg-slate-900/50">
                    <td class="py-4 px-6 md:px-8 text-xs font-bold text-gray-400 dark:text-gray-600 border-r border-gray-200 dark:border-slate-800">{{ $index + 1 }}</td>
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

    {{-- Back link --}}
    <div class="mt-8 text-center">
        <a href="{{ route('committee') }}" class="inline-flex items-center gap-2 text-sm font-bold text-primary-blue dark:text-accent-yellow hover:underline uppercase tracking-wider transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            Back to All Committees
        </a>
    </div>

</div>

<style>
    html { scroll-behavior: smooth; }
</style>

@endsection
