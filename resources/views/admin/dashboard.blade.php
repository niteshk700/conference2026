@extends('layouts.admin')

@section('page_title', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl">
        <p class="text-slate-500 font-bold uppercase text-[10px] tracking-widest mb-2">Total Viewers</p>
        <h3 class="text-4xl font-black text-white">{{ $viewCount->value ?? 0 }}</h3>
    </div>
    <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl">
        <p class="text-slate-500 font-bold uppercase text-[10px] tracking-widest mb-2">Committee Members</p>
        <h3 class="text-4xl font-black text-blue-500">{{ $committeeCount }}</h3>
    </div>
    <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl">
        <p class="text-slate-500 font-bold uppercase text-[10px] tracking-widest mb-2">Important Dates</p>
        <h3 class="text-4xl font-black text-accent-yellow">{{ $datesCount }}</h3>
    </div>
    <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl">
        <p class="text-slate-500 font-bold uppercase text-[10px] tracking-widest mb-2">Menu Pages</p>
        <h3 class="text-4xl font-black text-white">{{ $pagesCount }}</h3>
    </div>
    <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl">
        <p class="text-slate-500 font-bold uppercase text-[10px] tracking-widest mb-2">System Status</p>
        <h3 class="text-xl font-bold text-green-500 flex items-center gap-2">
            <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
            Operational
        </h3>
    </div>
</div>

<div class="mt-12">
    <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-widest">Active Marquee</h3>
    <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl">
        <p class="text-slate-400 italic text-lg leading-relaxed">"{{ $marquee->value ?? 'No marquee set.' }}"</p>
        <div class="mt-8">
            <a href="{{ route('admin.settings') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 px-8 rounded-xl transition-all shadow-lg shadow-blue-900/40">
                Edit Marquee
            </a>
        </div>
    </div>
</div>
@endsection
