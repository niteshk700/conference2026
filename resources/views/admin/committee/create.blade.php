@extends('layouts.admin')

@section('page_title', 'Add Committee Member')

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.committee.store') }}" method="POST" class="space-y-8">
        @csrf
        <div class="bg-slate-950 p-10 rounded-3xl border border-slate-800 shadow-xl space-y-8">
            <div class="space-y-3">
                <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Full Name</label>
                <input type="text" name="name" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none" placeholder="e.g. Prof. (Dr.) John Doe">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-3">
                    <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Role / Designation</label>
                    <input type="text" name="role" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none" placeholder="e.g. Professor, CSE">
                </div>
                <div class="space-y-3">
                    <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Affiliation / Institute</label>
                    <input type="text" name="affiliation" class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none" placeholder="e.g. NITRA Technical Campus">
                </div>
            </div>

            <div class="space-y-3">
                <label class="text-xs font-black text-slate-500 uppercase tracking-widest px-1">Committee Category</label>
                <select name="category" required class="w-full bg-slate-900 border border-slate-800 rounded-2xl p-4 text-white focus:border-blue-500 focus:ring-4 focus:ring-blue-900/20 transition-all outline-none appearance-none cursor-pointer">
                    @foreach(['Patrons and Chairs', 'Conference Secretaries', 'Advisory Committee', 'Organising Committee', 'Technical Program Committee', 'Sub Committees: Registration', 'Sub Committees: Inaugural and Lamp Lighting', 'Sub Committees: Transportation, Accommodation & Hospitality', 'Sub Committees: Reception, Decoration & Stage Management', 'Sub Committees: Technical Sessions', 'Sub Committees: Finance & Audit', 'Sub Committees: Food', 'Sub Committees: Press Publicity & Media Management'] as $cat)
                    <option value="{{ $cat }}">{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <div class="pt-6 flex gap-4">
                <a href="{{ route('admin.committee') }}" class="flex-1 bg-slate-900 hover:bg-slate-800 text-slate-400 font-black py-5 rounded-2xl transition-all text-center uppercase tracking-widest text-xs">Cancel</a>
                <button type="submit" class="flex-[2] bg-blue-600 hover:bg-blue-500 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-blue-900/40 uppercase tracking-widest text-xs">
                    Save Member Details
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
