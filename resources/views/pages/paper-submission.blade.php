@extends('layouts.conference')

@section('title', 'Paper Submission | ICETA-2026')

@section('content')
<!-- Page Title -->
<section class="bg-primary-blue dark:bg-black py-20 text-center transition-colors duration-300">
    <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Submission Guidelines</h1>
    <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Prepare Your Research</p>
</section>

<!-- Manuscript Guidelines -->
<section class="py-24 px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
        <div class="space-y-12">
            <div>
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase mb-6 flex items-center gap-3 transition-colors duration-300">
                    <div class="w-10 h-10 bg-blue-50 dark:bg-blue-900/30 rounded-xl flex items-center justify-center text-blue-600 dark:text-blue-400 text-lg">01</div>
                    Manuscript Preparation
                </h2>
                <ul class="space-y-4">
                    @foreach(['Paper length: 3000-6000 words', 'Format: APA style (latest edition)', 'Font: Times New Roman, Size 12', 'Line spacing: 1.5', 'Margins: 1 inch on all sides', 'Maximum 3 authors per paper'] as $guide)
                    <li class="flex items-center gap-4 p-4 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-50 dark:border-slate-700 transition-colors duration-300">
                        <div class="w-2 h-2 bg-accent-yellow rounded-full"></div>
                        <span class="font-medium text-gray-700 dark:text-gray-300 text-sm">{{ $guide }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase mb-6 flex items-center gap-3 transition-colors duration-300">
                    <div class="w-10 h-10 bg-blue-50 dark:bg-blue-900/30 rounded-xl flex items-center justify-center text-blue-600 dark:text-blue-400 text-lg">02</div>
                    Suggested Structure
                </h2>
                <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl shadow-blue-900/5 dark:shadow-none border border-gray-50 dark:border-slate-700 columns-2 gap-8 space-y-2 text-sm font-medium text-gray-600 dark:text-gray-400 transition-colors duration-300">
                    <p>1. Title of the Paper</p>
                    <p>2. Author(s) Details</p>
                    <p>3. Abstract (200-300 words)</p>
                    <p>4. Keywords (4-6)</p>
                    <p>5. Introduction</p>
                    <p>6. Literature Review</p>
                    <p>7. Research Methodology</p>
                    <p>8. Results and Discussion</p>
                    <p>9. Conclusion & References</p>
                </div>
            </div>
        </div>

        <div class="space-y-12">
            <div class="bg-blue-900 dark:bg-blue-950 p-10 rounded-3xl text-white relative overflow-hidden transition-colors duration-300">
                <div class="relative z-10">
                    <h2 class="text-2xl font-black uppercase mb-6">Abstract Guidelines</h2>
                    <p class="text-blue-200 dark:text-blue-300 mb-8 leading-relaxed">We invite original and unpublished research papers for ICETA-2026. Submissions should reflect strong theoretical and practical relevance.</p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center shrink-0 mt-1">✓</div>
                            <p class="text-sm font-bold">Length: 200-300 words</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center shrink-0 mt-1">✓</div>
                            <p class="text-sm">Must include: Purpose, Methodology, Findings</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center shrink-0 mt-1">✓</div>
                            <p class="text-sm">Keywords: 4-6 required</p>
                        </li>
                    </ul>
                </div>
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-accent-yellow/20 rounded-full blur-3xl"></div>
            </div>

            <div class="p-8 border-2 border-dashed border-gray-200 dark:border-slate-700 rounded-3xl text-center transition-colors duration-300">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-4">Ready to Submit?</h3>
                <p class="text-gray-500 dark:text-gray-400 mb-8 text-sm leading-relaxed">Manuscript must be original, free from plagiarism, properly cited, and not submitted elsewhere simultaneously.</p>
                <a href="https://conference.nitra.ac.in/" target="_blank" class="cta-button inline-block">Submit via Portal</a>
            </div>
        </div>
    </div>
</section>
@endsection
