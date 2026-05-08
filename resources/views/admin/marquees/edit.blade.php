@extends('layouts.admin')

@section('page_title', 'Edit Marquee')

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.marquees.update', $marquee->id) }}" method="POST" class="space-y-8">
        @csrf
        <div class="bg-slate-950 p-10 rounded-3xl border border-slate-800 shadow-xl space-y-8">
            <div class="space-y-3">
                <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Announcement Text</label>
                <textarea name="text" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none" rows="4">{{ $marquee->text }}</textarea>
            </div>

            <div class="space-y-3">
                <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Target Link (Optional)</label>
                <input type="url" name="url" value="{{ $marquee->url }}" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-3">
                    <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Display Order</label>
                    <input type="number" name="order" value="{{ $marquee->order }}" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none">
                </div>
                <div class="flex items-center gap-3 pt-8 px-1">
                    <input type="checkbox" name="is_active" value="1" id="active" class="w-5 h-5 rounded border-slate-800 bg-slate-900 text-blue-600 focus:ring-blue-500" {{ $marquee->is_active ? 'checked' : '' }}>
                    <label for="active" class="text-sm font-bold text-slate-400 cursor-pointer">Active</label>
                </div>
            </div>

            <div class="pt-6 flex gap-4">
                <a href="{{ route('admin.marquees') }}" class="flex-1 bg-slate-900 hover:bg-slate-800 text-slate-400 font-black py-5 rounded-2xl transition-all text-center uppercase tracking-widest text-xs">Cancel</a>
                <button type="submit" class="flex-[2] bg-blue-600 hover:bg-blue-500 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-blue-900/40 uppercase tracking-widest text-xs">
                    Update Marquee
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
