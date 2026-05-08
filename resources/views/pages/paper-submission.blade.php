@extends('layouts.conference')

@section('title', 'Paper Submission | ICETA-2026')

@section('content')
<!-- Page Header -->
<section class="bg-primary-blue dark:bg-black py-20 text-center relative overflow-hidden transition-colors duration-300">
    <div class="relative z-10">
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Submission Guidelines</h1>
        <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Prepare Your Research for ICETA-2026</p>
    </div>
</section>

<!-- Guidelines -->
<div class="max-w-7xl mx-auto px-8 py-24">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
        <!-- Abstract Guidelines -->
        <div class="space-y-12">
            <div>
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tighter mb-8 flex items-center gap-4">
                    <span class="w-12 h-12 bg-blue-50 dark:bg-slate-800 rounded-2xl flex items-center justify-center text-blue-600 font-black">A</span>
                    Abstract Guidelines
                </h2>
                <div class="bg-slate-50 dark:bg-slate-900/50 p-10 rounded-[2.5rem] border border-gray-100 dark:border-slate-800 space-y-6">
                    <div class="space-y-4 text-sm md:text-base text-gray-600 dark:text-gray-400">
                        <p class="flex gap-4"><strong>• Length:</strong> <span>200–300 words</span></p>
                        <p class="flex gap-4"><strong>• Focus:</strong> <span>Purpose/Objectives, Methodology, Key Findings</span></p>
                        <p class="flex gap-4"><strong>• Language:</strong> <span>Clear academic English</span></p>
                        <p class="flex gap-4"><strong>• Keywords:</strong> <span>4–6 keywords must be included at the end</span></p>
                    </div>
                </div>
            </div>

            <!-- Ethical Declaration -->
            <div class="p-10 bg-primary-blue text-white rounded-[2.5rem] shadow-2xl shadow-blue-900/40">
                <h3 class="text-lg font-black uppercase tracking-widest mb-4">Ethical Declaration</h3>
                <p class="text-sm text-blue-100 leading-relaxed">Manuscripts must be original, free from plagiarism, properly cited, ethically conducted, and not submitted elsewhere simultaneously. Accompany with accurate data and conflict disclosure.</p>
            </div>
        </div>

        <!-- Full Paper Guidelines -->
        <div class="space-y-12">
            <div>
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tighter mb-8 flex items-center gap-4">
                    <span class="w-12 h-12 bg-blue-50 dark:bg-slate-800 rounded-2xl flex items-center justify-center text-blue-600 font-black">M</span>
                    Manuscript Preparation
                </h2>
                <div class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-gray-100 dark:border-slate-800 shadow-xl shadow-blue-900/5 space-y-8">
                    <div class="grid grid-cols-2 gap-8 text-center border-b dark:border-slate-800 pb-8">
                        <div>
                            <p class="text-2xl font-black text-primary-blue dark:text-white">APA</p>
                            <p class="text-[9px] font-black uppercase tracking-widest text-gray-400">Latest Edition</p>
                        </div>
                        <div>
                            <p class="text-2xl font-black text-primary-blue dark:text-white">3-6k</p>
                            <p class="text-[9px] font-black uppercase tracking-widest text-gray-400">Word Count</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4 text-sm text-gray-600 dark:text-gray-400 mb-8">
                        <p><strong>• Font:</strong> Times New Roman, Size 12</p>
                        <p><strong>• Spacing:</strong> 1.5 line spacing</p>
                        <p><strong>• Margins:</strong> 1 inch on all sides</p>
                        <p><strong>• Authors:</strong> Maximum 3 authors per paper</p>
                        <p class="pt-4 font-black uppercase text-[10px] text-blue-600">Suggested Structure</p>
                        <p class="text-xs">Title | Author Details | Abstract | Keywords | Introduction | Literature Review | Methodology | Results & Discussion | Conclusion | References</p>
                    </div>

                    <a href="{{ asset('JIEEE Paper Template.docx') }}" class="flex items-center justify-center gap-3 px-6 py-4 bg-slate-50 dark:bg-slate-800 text-primary-blue dark:text-white rounded-2xl font-black uppercase tracking-widest text-[10px] border border-gray-100 dark:border-slate-700 transition-all hover:bg-white dark:hover:bg-slate-700 hover:shadow-lg group">
                        <svg class="w-4 h-4 text-blue-600 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Download Sample Manuscript
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
