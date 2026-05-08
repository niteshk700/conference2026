@extends('layouts.admin')

@section('page_title', 'Marquee Manager')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
    <!-- List -->
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-slate-950 rounded-3xl border border-slate-800 shadow-xl overflow-hidden">
            <div class="bg-slate-900/50 px-8 py-5 border-b border-slate-800">
                <h3 class="text-blue-400 font-black uppercase text-sm tracking-widest">Active Announcements</h3>
            </div>
            <div class="divide-y divide-slate-800/50">
                @forelse($marquees as $mq)
                <div class="px-8 py-6 flex justify-between items-center group hover:bg-slate-900/30 transition-all">
                    <div class="flex-1">
                        <h4 class="text-white font-bold text-lg leading-relaxed">{{ $mq->text }}</h4>
                        @if($mq->url)
                        <p class="text-blue-500 text-xs font-bold truncate max-w-md">{{ $mq->url }}</p>
                        @else
                        <p class="text-slate-600 text-xs font-bold italic">No Link</p>
                        @endif
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('admin.marquees.edit', $mq->id) }}" class="p-3 text-slate-500 hover:text-blue-500 hover:bg-blue-950/30 rounded-xl transition-all opacity-0 group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <form action="{{ route('admin.marquees.delete', $mq->id) }}" method="POST" onsubmit="return confirm('Delete this announcement?')">
                            @csrf
                            @method('DELETE')
                            <button class="p-3 text-slate-500 hover:text-red-500 hover:bg-red-950/30 rounded-xl transition-all opacity-0 group-hover:opacity-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="p-12 text-center text-slate-600 italic">No announcements added yet.</div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Add Form -->
    <div class="lg:col-span-1">
        <form action="{{ route('admin.marquees.store') }}" method="POST" class="space-y-6 sticky top-28">
            @csrf
            <div class="bg-slate-950 p-8 rounded-3xl border border-slate-800 shadow-xl space-y-6">
                <h3 class="text-white font-black uppercase text-xs tracking-widest mb-4">Add Announcement</h3>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Announcement Text</label>
                    <textarea name="text" required class="w-full bg-slate-900 border border-slate-800 rounded-xl p-3 text-white focus:border-blue-500 outline-none text-sm leading-relaxed" rows="4" placeholder="Enter marquee text..."></textarea>
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Target Link (Optional)</label>
                    <input type="url" name="url" class="w-full bg-slate-900 border border-slate-800 rounded-xl p-3 text-white focus:border-blue-500 outline-none text-sm" placeholder="https://...">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest px-1">Display Order</label>
                    <input type="number" name="order" value="0" class="w-full bg-slate-900 border border-slate-800 rounded-xl p-3 text-white focus:border-blue-500 outline-none text-sm">
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-black py-4 rounded-xl transition-all shadow-lg shadow-blue-900/40 uppercase text-[10px] tracking-widest">
                    Add to Marquee
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
