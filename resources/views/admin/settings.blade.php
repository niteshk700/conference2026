@extends('layouts.admin')

@section('page_title', 'Global Site Settings')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-12">
        @csrf
        
        <!-- Branding & Hero Section -->
        <div class="bg-slate-950 p-10 rounded-[3rem] border border-slate-800 shadow-2xl space-y-10">
            <div class="flex items-center gap-4 mb-4">
                <div class="p-3 bg-blue-600 rounded-2xl">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                </div>
                <h3 class="text-white font-black uppercase text-xl tracking-tight">Hero & Branding</h3>
            </div>

            <div class="space-y-6">
                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Main Conference Title</label>
                    <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none font-bold">
                </div>

                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Hero Subtitle / Year</label>
                    <input type="text" name="hero_subtitle" value="{{ $settings['hero_subtitle'] ?? '' }}" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none font-bold">
                </div>

                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Conference Overview (Home Page)</label>
                    <textarea name="conference_overview" rows="4" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none font-medium">{{ $settings['conference_overview'] ?? '' }}</textarea>
                </div>

                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Key Focus Areas (Comma Separated)</label>
                    <input type="text" name="key_focus_areas" value="{{ $settings['key_focus_areas'] ?? '' }}" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none font-medium" placeholder="AI, Cloud, Cybersecurity...">
                </div>
            </div>
        </div>

        <!-- Analytics & Counters -->
        <div class="bg-slate-950 p-10 rounded-[3rem] border border-slate-800 shadow-2xl space-y-10">
            <div class="flex items-center gap-4 mb-4">
                <div class="p-3 bg-accent-yellow rounded-2xl">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-white font-black uppercase text-xl tracking-tight">Analytics & Manual Overrides</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Manual Visitor Count</label>
                    <input type="number" name="view_count" value="{{ $settings['view_count'] ?? 0 }}" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none font-mono text-xl">
                    <p class="text-[10px] text-slate-600 font-medium px-2 italic">Changing this value will manually reset the public counter.</p>
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-black py-5 px-12 rounded-2xl transition-all shadow-2xl shadow-blue-900/40 uppercase text-xs tracking-widest flex items-center gap-4 group">
                Save Global Settings
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </div>
    </form>
</div>
@endsection
