@extends('layouts.admin')

@section('page_title', 'Edit Important Date')

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.dates.update', $date->id) }}" method="POST" class="space-y-8">
        @csrf
        <div class="bg-slate-950 p-10 rounded-3xl border border-slate-800 shadow-xl space-y-8">
            <div class="space-y-3">
                <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Label</label>
                <input type="text" name="label" value="{{ $date->label }}" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none" placeholder="e.g. Abstract Submission">
            </div>

            <div class="space-y-3">
                <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Date String</label>
                <input type="text" name="date_value" value="{{ $date->date_value }}" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none" placeholder="e.g. 15th June 2026">
            </div>

            <div class="flex items-center gap-3 px-1">
                <input type="checkbox" name="is_highlighted" value="1" id="highlight" class="w-5 h-5 rounded border-slate-800 bg-slate-900 text-blue-600 focus:ring-blue-500" {{ $date->is_highlighted ? 'checked' : '' }}>
                <label for="highlight" class="text-sm font-bold text-slate-400 cursor-pointer">Highlight this date</label>
            </div>

            <div class="pt-6 flex gap-4">
                <a href="{{ route('admin.dates') }}" class="flex-1 bg-slate-900 hover:bg-slate-800 text-slate-400 font-black py-5 rounded-2xl transition-all text-center uppercase tracking-widest text-xs">Cancel</a>
                <button type="submit" class="flex-[2] bg-blue-600 hover:bg-blue-500 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-blue-900/40 uppercase tracking-widest text-xs">
                    Update Milestone
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
