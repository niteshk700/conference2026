@extends('layouts.conference')

@section('title', 'About | ICETA-2026')

@section('content')
<!-- Page Header -->
<section class="bg-primary-blue dark:bg-black py-20 text-center relative overflow-hidden transition-colors duration-300">
    <div class="relative z-10">
        <h1 class="text-2xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">About the Conference</h1>
        <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Vision, Mission & Host Institution</p>
    </div>
</section>

<!-- Content Sections -->
<div class="max-w-7xl mx-auto px-8 py-24 space-y-32">
    
    <!-- About ICETA-2026 -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-8">
            <div class="inline-block px-4 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-black text-[10px] uppercase tracking-widest rounded-full">Conference Overview</div>
            <h2 class="text-3xl md:text-2xl font-black text-primary-blue dark:text-white leading-tight uppercase tracking-tighter">ICETA-2026</h2>
            <div class="space-y-6 text-md text-gray-600 dark:text-gray-400 leading-relaxed">
                <p>The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators to exchange knowledge and insights on the latest advancements in emerging technologies.</p>
                <p>The conference focuses on areas such as Artificial Intelligence, IoT, Robotics, Cybersecurity, Cloud Computing, and Data Analytics, highlighting their applications in solving real-world challenges.</p>
                <p>It provides a multidisciplinary platform for discussing innovations, trends, and practical implementations across sectors like Textile, healthcare, agriculture, smart cities, and sustainability. ICETA-2026 encourages collaboration, research excellence, and the development of innovative, technology-driven solutions for a sustainable and digitally empowered future.</p>
            </div>
        </div>
        <div class="bg-slate-50 dark:bg-slate-900 p-12 rounded-[3rem] border border-gray-100 dark:border-slate-800">
            <h3 class="text-xl font-bold text-primary-blue dark:text-accent-yellow mb-6 uppercase tracking-widest">Our Objectives</h3>
            <ul class="space-y-6">
                <li class="flex gap-4">
                    <span class="text-blue-600 font-black">01.</span>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Promote advanced research in Emerging Technologies like AI, IoT, Textile, Robotics, and Data Analytics.</p>
                </li>
                <li class="flex gap-4">
                    <span class="text-blue-600 font-black">02.</span>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Encourage interdisciplinary collaboration among academia, industry, and policymakers.</p>
                </li>
                <li class="flex gap-4">
                    <span class="text-blue-600 font-black">03.</span>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Address real-world challenges in sectors such as healthcare, agriculture, and smart cities.</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- About NITRA Technical Campus -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="order-2 lg:order-1 bg-primary-blue text-white p-12 rounded-[3rem] shadow-2xl shadow-blue-900/40">
            <h3 class="text-xl font-bold text-accent-yellow mb-6 uppercase tracking-widest">Institutional Heritage</h3>
            <div class="space-y-6 text-sm md:text-base leading-relaxed text-blue-100">
                <p>NITRA Technical Campus (NTC), Ghaziabad, is the academic arm of the Northern India Textile Research Association (NITRA), a premier institute established in 1974 by the Government of India and the textile industry.</p>
                <p>NTC is approved by the AICTE and is affiliated with Dr. A.P.J. Abdul Kalam Technical University (AKTU), Lucknow.</p>
                <p>The campus promotes interdisciplinary learning, skill development, and real-world exposure, aiming to nurture competent professionals with strong ethical values and a commitment to technological advancement.</p>
            </div>
        </div>
        <div class="order-1 lg:order-2 space-y-8">
            <div class="inline-block px-4 py-1 bg-accent-yellow/10 text-blue-700 dark:text-accent-yellow font-black text-[10px] uppercase tracking-widest rounded-full">Host Institution</div>
            <h2 class="text-3xl md:text-2xl font-black text-primary-blue dark:text-white leading-tight uppercase tracking-tighter">NITRA <span class="text-blue-600 italic">Technical Campus</span></h2>
            <p class="text-md text-gray-600 dark:text-gray-400 leading-relaxed">A center of excellence in technical education and research, supported by experienced faculty and modern infrastructure.</p>
            <div class="pt-8 border-t border-gray-100 dark:border-slate-800 flex gap-12">
                <div>
                    <p class="text-2xl font-black text-primary-blue dark:text-white">2012</p>
                    <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">Established</p>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary-blue dark:text-white">AKTU</p>
                    <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">Affiliation</p>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary-blue dark:text-white">802</p>
                    <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">College Code</p>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
