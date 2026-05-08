@extends('layouts.admin')

@section('page_title', 'Conference Timeline')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
    <!-- List -->
    <div class="lg:col-span-2 space-y-8">
        <div class="relative">
            <!-- Vertical Timeline Line -->
            <div class="absolute left-8 top-0 bottom-0 w-px bg-gradient-to-b from-blue-600 via-slate-800 to-transparent hidden md:block"></div>

            <div class="space-y-6">
                @forelse($dates as $date)
                <div class="relative pl-0 md:pl-16 group">
                    <!-- Timeline Dot -->
                    <div class="absolute left-[26px] top-8 w-3 h-3 rounded-full bg-slate-900 border-2 {{ $date->is_highlighted ? 'border-accent-yellow animate-pulse shadow-[0_0_10px_rgba(255,193,7,0.5)]' : 'border-blue-600' }} hidden md:block z-10 transition-all group-hover:scale-150"></div>

                    <div class="bg-slate-950 p-6 md:p-8 rounded-[2.5rem] border border-slate-800 shadow-2xl transition-all hover:border-blue-500/50 hover:shadow-blue-900/20 group-hover:-translate-y-1 relative overflow-hidden">
                        @if($date->is_highlighted)
                        <div class="absolute top-0 right-0">
                            <div class="bg-accent-yellow text-black text-[10px] font-black px-4 py-1 rounded-bl-2xl uppercase tracking-widest shadow-lg">Featured</div>
                        </div>
                        @endif

                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div class="space-y-2">
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <h4 class="text-white font-black text-xl tracking-tight uppercase">{{ $date->label }}</h4>
                                </div>
                                <p class="text-blue-400 font-bold text-sm tracking-widest pl-8 uppercase">{{ $date->date_value }}</p>
                            </div>

                            <div class="flex items-center gap-2 pl-8 md:pl-0">
                                <a href="{{ route('admin.dates.edit', $date->id) }}" class="p-4 bg-slate-900 text-slate-400 hover:text-white hover:bg-blue-600 rounded-2xl transition-all shadow-lg border border-slate-800 hover:border-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                <form action="{{ route('admin.dates.delete', $date->id) }}" method="POST" onsubmit="return confirm('Delete this date?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-4 bg-slate-900 text-slate-500 hover:text-white hover:bg-red-600 rounded-2xl transition-all shadow-lg border border-slate-800 hover:border-red-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-slate-950 p-20 rounded-[3rem] border border-slate-800 text-center space-y-4">
                    <div class="w-20 h-20 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-6 border border-slate-800">
                        <svg class="w-10 h-10 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-slate-400 font-bold uppercase tracking-[0.3em] text-xs">No Milestones Found</h3>
                    <p class="text-slate-600 text-sm max-w-xs mx-auto italic">Start by adding important conference dates using the form on the right.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Add Form -->
    <div class="lg:col-span-1">
        <form action="{{ route('admin.dates.store') }}" method="POST" class="space-y-6 sticky top-28">
            @csrf
            <div class="bg-slate-950 p-10 rounded-[3rem] border border-slate-800 shadow-2xl space-y-8 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-600 to-accent-yellow"></div>
                
                <h3 class="text-white font-black uppercase text-sm tracking-[0.2em] mb-4">Add New Milestone</h3>
                
                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Event Label</label>
                    <input type="text" name="label" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none text-sm font-medium" placeholder="e.g. Paper Submission">
                </div>
                
                <div class="space-y-3">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Date Expression</label>
                    <input type="text" name="date_value" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none text-sm font-medium" placeholder="e.g. 15th July 2026">
                </div>
                
                <div class="flex items-center gap-4 px-1 p-4 bg-slate-900/50 rounded-2xl border border-slate-800/50 group-hover:border-blue-500/30 transition-all">
                    <input type="checkbox" name="is_highlighted" value="1" id="highlight" class="w-5 h-5 rounded border-slate-700 bg-slate-900 text-blue-600 focus:ring-blue-500 transition-all cursor-pointer">
                    <label for="highlight" class="text-xs font-bold text-slate-400 cursor-pointer select-none">Feature this milestone on the timeline</label>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-blue-900/40 uppercase text-xs tracking-widest flex items-center justify-center gap-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Create Milestone
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
