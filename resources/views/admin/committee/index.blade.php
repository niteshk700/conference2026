@extends('layouts.admin')

@section('page_title', 'Committee Management')

@section('content')
<div class="mb-10 flex justify-between items-center">
    <p class="text-slate-400 font-medium">Manage members across all conference committees.</p>
    <a href="{{ route('admin.committee.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-black py-3 px-8 rounded-xl transition-all shadow-lg shadow-blue-900/40 uppercase text-xs tracking-widest">
        Add New Member
    </a>
</div>

<div class="space-y-12">
    @foreach($committees as $category => $members)
    <div class="bg-slate-950 rounded-3xl border border-slate-800 shadow-xl overflow-hidden">
        <div class="bg-slate-900/50 px-8 py-5 border-b border-slate-800 flex justify-between items-center">
            <h3 class="text-blue-400 font-black uppercase text-sm tracking-widest">{{ $category }}</h3>
            <span class="text-[10px] font-black bg-slate-800 text-slate-400 px-3 py-1 rounded-full">{{ $members->count() }} Members</span>
        </div>
        <div class="divide-y divide-slate-800/50">
            @foreach($members as $member)
            <div class="px-8 py-6 flex justify-between items-center group hover:bg-slate-900/30 transition-all">
                <div>
                    <h4 class="text-white font-bold text-lg">{{ $member->name }}</h4>
                    <p class="text-slate-500 text-sm font-medium">{{ $member->role }} @if($member->affiliation) <span class="text-slate-700 mx-2">|</span> {{ $member->affiliation }} @endif</p>
                </div>
                <div class="flex items-center gap-4 opacity-0 group-hover:opacity-100 transition-all">
                    <a href="{{ route('admin.committee.edit', $member->id) }}" class="p-3 text-slate-500 hover:text-blue-500 hover:bg-blue-950/30 rounded-xl transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </a>
                    <form action="{{ route('admin.committee.delete', $member->id) }}" method="POST" onsubmit="return confirm('Delete this member?')">
                        @csrf
                        @method('DELETE')
                        <button class="p-3 text-slate-500 hover:text-red-500 hover:bg-red-950/30 rounded-xl transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection
