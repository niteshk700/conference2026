@extends('layouts.conference')

@section('title', 'Committee | ICETA-2026')

@section('content')
<!-- Page Title -->
<section class="bg-primary-blue dark:bg-black py-20 text-center transition-colors duration-300">
    <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Our Committee</h1>
    <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Organizing for Excellence</p>
</section>

<!-- Committee Dynamic Sections -->
@foreach($committees as $category => $members)
<section class="py-24 px-8 relative overflow-hidden {{ $loop->even ? 'bg-slate-50 dark:bg-slate-900/40' : 'bg-white dark:bg-slate-900' }} transition-colors duration-300">
    <!-- Decorative Background Element -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-px bg-gradient-to-r from-transparent via-gray-200 dark:via-slate-700 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white uppercase tracking-tighter mb-4 transition-colors duration-300">{{ $category }}</h2>
            <div class="flex justify-center items-center gap-4">
                <div class="w-12 h-0.5 bg-accent-yellow/30"></div>
                <div class="w-4 h-4 rotate-45 border-2 border-accent-yellow"></div>
                <div class="w-12 h-0.5 bg-accent-yellow/30"></div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach($members as $member)
            <div class="bg-white dark:bg-slate-800/50 p-8 rounded-[2rem] shadow-2xl shadow-blue-900/5 dark:shadow-none text-center border border-gray-100 dark:border-slate-700/50 transition-all hover:-translate-y-2 hover:border-accent-yellow/50 group">
                <h3 class="text-xl font-bold text-primary-blue dark:text-white mb-2 transition-colors duration-300 group-hover:text-blue-600 dark:group-hover:text-accent-yellow">{{ $member->name }}</h3>
                @if($member->role)
                <p class="text-blue-600 dark:text-blue-400 font-extrabold text-[10px] uppercase tracking-[0.2em] mb-3">{{ $member->role }}</p>
                @endif
                @if($member->affiliation)
                <div class="pt-4 border-t border-gray-100 dark:border-slate-700/50">
                    <p class="text-gray-500 dark:text-gray-400 text-xs font-medium leading-relaxed">{{ $member->affiliation }}</p>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

<!-- Organizing Committee (Dark Section for contrast if preferred, but dynamic now) -->
<section class="py-24 bg-primary-blue dark:bg-black text-white px-8 transition-colors duration-300 text-center">
    <p class="text-slate-400 uppercase font-bold tracking-[0.3em] text-xs">Collaborative Excellence</p>
    <h2 class="text-3xl font-black uppercase tracking-tight mt-2">ICETA Global Network</h2>
</section>
@endsection
