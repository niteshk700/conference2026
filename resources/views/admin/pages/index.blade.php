@extends('layouts.admin')

@section('page_title', 'Page Management')

@section('content')
<div class="space-y-8">
    @foreach($pages as $page)
    <div class="bg-slate-950 rounded-3xl border border-slate-800 shadow-xl overflow-hidden">
        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
            @csrf
            <div class="bg-slate-900/50 px-8 py-5 border-b border-slate-800 flex justify-between items-center">
                <h3 class="text-blue-400 font-black uppercase text-sm tracking-widest">Page: {{ $page->title }}</h3>
                <span class="text-[10px] font-black bg-slate-800 text-slate-500 px-3 py-1 rounded-full uppercase tracking-tighter">Slug: {{ $page->slug }}</span>
            </div>
            <div class="p-8 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-slate-600 uppercase tracking-widest px-1">Menu Title</label>
                        <input type="text" name="title" value="{{ $page->title }}" class="w-full bg-slate-900 border border-slate-800 rounded-xl p-3 text-white focus:border-blue-500 outline-none transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-slate-600 uppercase tracking-widest px-1">Meta Description (SEO)</label>
                        <input type="text" name="meta_description" value="{{ $page->meta_description }}" class="w-full bg-slate-900 border border-slate-800 rounded-xl p-3 text-white focus:border-blue-500 outline-none transition-all" placeholder="Enter SEO description...">
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-slate-600 uppercase tracking-widest px-1">Page Content (HTML Allowed)</label>
                    <textarea name="content" rows="10" class="w-full bg-slate-900 border border-slate-800 rounded-xl p-4 text-white focus:border-blue-500 outline-none transition-all font-mono text-sm" placeholder="Enter page content here...">{{ $page->content }}</textarea>
                </div>

                <div class="pt-4 flex justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-black py-3 px-8 rounded-xl transition-all shadow-lg shadow-blue-900/40 uppercase text-[10px] tracking-widest">
                        Save Page Changes
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection
