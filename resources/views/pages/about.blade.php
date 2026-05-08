@extends('layouts.conference')

@section('title', 'About | ICETA-2026')

@section('content')
<!-- Page Title -->
<section class="bg-primary-blue dark:bg-black py-20 text-center relative overflow-hidden transition-colors duration-300">
    <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-10 dark:opacity-5">
    <div class="relative z-10">
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-4">About ICETA-2026</h1>
        <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">NITRA Technical Campus, Ghaziabad</p>
    </div>
</section>

<!-- Page Content -->
<section class="py-24 px-8">
    <div class="max-w-5xl mx-auto prose dark:prose-invert prose-blue max-w-none">
        @if($page && $page->content)
            {!! $page->content !!}
        @else
            <!-- Fallback if no content in DB -->
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="flex-1 space-y-8">
                    <div class="inline-block px-4 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-bold text-xs uppercase tracking-widest rounded-full">Vision & Scope</div>
                    <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white leading-tight">Advancing Research in <br><span class="text-blue-600 dark:text-blue-400">Emerging Technologies</span></h2>
                    <div class="w-16 h-1 bg-accent-yellow"></div>
                    <div class="space-y-6 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        <p>The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators to exchange knowledge and insights on the latest advancements in emerging technologies.</p>
                        <p>The conference focuses on areas such as Artificial Intelligence, IoT, Robotics, Cybersecurity, Cloud Computing, and Data Analytics, highlighting their applications in solving real-world challenges.</p>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-accent-yellow/10 rounded-2xl -rotate-3"></div>
                        <div class="relative bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-2xl dark:shadow-none border border-gray-100 dark:border-slate-700">
                            <p class="text-gray-600 dark:text-gray-300 italic leading-relaxed">"It provides a multidisciplinary platform for discussing innovations, trends, and practical implementations across sectors like healthcare, agriculture, smart cities, and sustainability."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-24 text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight transition-colors duration-300">About the Institute</h2>
                <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                <div class="space-y-6">
                    <p>NITRA Technical Campus, Ghaziabad, established in 2012, is a premier institution committed to excellence in technical education and research. Affiliated with reputed bodies and certified under ISO 9001:2015, the institute offers quality programs in engineering and technology with a strong focus on innovation and industry relevance.</p>
                </div>
                <div class="space-y-6">
                    <p>It provides a dynamic learning environment supported by experienced faculty, modern infrastructure, and research-driven practices. The campus actively promotes interdisciplinary collaboration, skill development, and practical exposure to real-world challenges.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
