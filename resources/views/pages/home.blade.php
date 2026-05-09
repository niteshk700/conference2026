@extends('layouts.conference')

@section('title', 'Home | ICETA-2026')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex flex-col justify-center items-center text-center text-white px-2 overflow-hidden bg-primary-blue dark:bg-black transition-colors duration-300 py-20">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="Conference Background" class="w-full h-full object-cover opacity-30 dark:opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-primary-blue/90 to-primary-blue dark:from-black/90 dark:to-black"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-5xl animate-fade-in">
        <div class="mb-8 flex flex-col items-center">
            <span class="inline-block px-2 py-1 bg-accent-yellow text-primary-blue font-black text-[10px] uppercase tracking-[0.4em] mb-4 rounded-full">College Code: 802</span>
            <p class="text-3xl md:text-3xl font-black mb-6 leading-tight uppercase tracking-tighter">{{  'International Conference on' }}</p>
            <h1 class="text-3xl md:text-3xl font-black mb-6 leading-tight uppercase tracking-tighter">{{ $settings['hero_title'] ?? 'Emerging Technologies & its Applications' }}</h1>
            <p class="text-xl md:text-2xl font-bold mb-8 text-white/80 dark:text-gray-400 uppercase tracking-[0.5em]">(ICETA-2026)</p>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center gap-6 mb-12">
            <div class="bg-white/5 backdrop-blur-xl px-10 py-6 rounded-2xl border border-white/10">
                <p class="text-accent-yellow text-[10px] uppercase font-black tracking-widest mb-2">Conference Dates</p>
                <p class="text-xl font-black italic">17th - 18th July 2026</p>
            </div>
            <div class="bg-white/5 backdrop-blur-xl px-10 py-6 rounded-2xl border border-white/10">
                <p class="text-accent-yellow text-[10px] uppercase font-black tracking-widest mb-2">Venue</p>
                <p class="text-xl font-black">NTC, Ghaziabad</p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
            <a href="{{ route('registration') }}" class="px-10 py-4 bg-accent-yellow text-primary-blue rounded-xl font-black uppercase tracking-widest transition-all hover:scale-105 shadow-2xl shadow-yellow-500/20">Registration</a>
            <a href="{{ route('call-for-paper') }}" class="px-10 py-4 bg-accent-yellow text-primary-blue rounded-xl font-black uppercase tracking-widest transition-all hover:scale-105 shadow-2xl shadow-yellow-500/20">Call for Papers</a>
        </div>
    </div>
</section>

<!-- Sponsors Marquee -->
<div class="bg-white dark:bg-slate-900 py-6 border-y border-gray-100 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-8 flex flex-wrap justify-center items-center gap-12 opacity-60 grayscale hover:grayscale-0 transition-all">
        <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">Sponsored By:</p>
        <span class="text-sm font-bold text-gray-600 dark:text-gray-300">Dr. A.P.J. Abdul Kalam Technical University, Lucknow</span>
        
    </div>
</div>

<!-- Leadership Section -->
<div class="max-w-7xl mx-auto">
            <!-- Chief Patrons Section -->
            <div class="mb-24">
                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Chief Patrons</h2>
                    <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Prof. (Dr.) J.P Panday</h3>
                        <p class="text-gray-500 text-sm italic">Vice Chancellor, AKTU</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Shri. Vidit Jain</h3>
                        <p class="text-gray-500 text-sm italic">Chairman-NITRA Council of Admin</p>
                    </div>
                </div>
            </div>

            <!-- Patron & Convener Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-8 mt-8">
                <!-- Patron -->
                <div class="space-y-4">
                    <div class="text-center">
                        <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-2 uppercase tracking-tight">Patron</h2>
                        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Dr. M.S. Parmar</h3>
                        <p class="text-gray-500 text-sm italic">Director General, NITRA</p>
                    </div>
                </div>

                <!-- Convener -->
                <div class="space-y-4">
                    <div class="text-center">
                        <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-2 uppercase tracking-tight">Convener</h2>
                        <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Dr. B.K Sharma</h3>
                        <p class="text-gray-500 text-sm italic">Director, NTC</p>
                    </div>
                </div>

            </div>
        </div>
        
         <div class="space-y-4" style="padding-block:20px">
                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Coordinators</h2>
                    <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Mr. K.K Dewan
</h3>
                        <p class="text-gray-500 text-sm italic">Registrar</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-xl shadow-blue-900/5 border border-gray-100 dark:border-slate-800 text-center">
                        <h3 class="text-xl font-black text-primary-blue dark:text-white mb-2">Dr. A.P Srivastava</h3>
                        <p class="text-gray-500 text-sm italic">Head of Department (CSE)</p>
                    </div>
                </div>
            </div>

        </section>

<!-- About Sections -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
        <!-- About Conference -->
        <div class="space-y-8">
            <h2 class="text-3xl font-black text-primary-blue dark:text-white leading-tight">About the <span class="text-blue-600 italic">Conference</span></h2>
            <div class="space-y-6 text-gray-600 dark:text-gray-400 leading-relaxed text-md">
                <p style="text-align: justify;">The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators to exchange knowledge and insights on the latest advancements in emerging technologies. The conference focuses on areas such as Artificial Intelligence, IoT, Robotics, Cybersecurity, Cloud Computing, and Data Analytics, highlighting their applications in solving real-world challenges. It provides a multidisciplinary platform for discussing innovations, trends, and practical implementations across sectors like Textile, healthcare, agriculture, smart cities, and sustainability. ICETA-2026 encourages collaboration, research excellence, and the development of innovative, technology-driven solutions for a sustainable and digitally empowered future.</div>
        </div>
        <!-- About Institute -->
        <div class="space-y-8">
            <h2 class="text-3xl font-black text-primary-blue dark:text-white leading-tight">About the <span class="text-accent-yellow italic">Institute</span></h2>
            <div class="space-y-6 text-gray-600 dark:text-gray-400 leading-relaxed text-md">
                <p style="text-align: justify;">NITRA Technical Campus (NTC), Ghaziabad, is the academic wing of the Northern India Textile Research Association (NITRA), a premier institute established in 1974 by the Government of India and the textile industry. Affiliated with reputed bodies, NTC offers quality engineering and technology programs with a strong focus on innovation and industry relevance. The campus provides a dynamic learning environment supported by experienced faculty, modern infrastructure, and research-driven practices. It promotes interdisciplinary learning, skill development, and real-world exposure, aiming to nurture competent professionals with strong ethical values and a commitment to technological advancement.
</p></div>
        </div>
    </div>
</section>

<!-- Objectives Section -->
<section class="py-20 bg-primary-blue dark:bg-black text-white px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-accent-yellow font-black text-[10px] uppercase tracking-[0.3em] mb-4">Core Mission</p>
            <h2 class="text-3xl font-black uppercase tracking-tight">Conference Objectives</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-8 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-6 flex items-center justify-center text-primary-blue font-black">01</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Promote advanced research in Emerging Technologies like AI, IoT, Textile, Robotics, and Data Analytics.</p>
            </div>
            <div class="p-8 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-6 flex items-center justify-center text-primary-blue font-black">02</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Encourage interdisciplinary collaboration among academia, industry, and policymakers.</p>
            </div>
            <div class="p-8 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-6 flex items-center justify-center text-primary-blue font-black">03</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Address real-world challenges in sectors such as healthcare, agriculture, and smart cities.</p>
            </div>
            <div class="p-8 bg-white/5 border border-white/10 rounded-2xl">
                <div class="w-10 h-10 bg-accent-yellow rounded-lg mb-6 flex items-center justify-center text-primary-blue font-black">04</div>
                <p class="text-sm font-medium leading-relaxed" style="text-align:justify;">Strengthen academia–industry partnerships for innovation and knowledge transfer.</p>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Tracks Section -->
<section class="py-20 px-8 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Technical Tracks</h2>
            <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Track 1 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T1</span>
                    AI & Data Science
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Machine Learning & Deep Learning</li>
                    <li>• Data Analytics & Big Data</li>
                    <li>• Natural Language Processing & Gen-AI</li>
                    <li>• Computer Vision & Intelligent Systems</li>
                    <li>• AI for Healthcare, Textile & Agriculture</li>
                </ul>
            </div>
            <!-- Track 2 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T2</span>
                    IoT, Robotics & Industry 4.0
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Industrial IoT Systems & Smart Sensors</li>
                    <li>• Robotics & Automation</li>
                    <li>• Smart Manufacturing & Industry 4.0</li>
                    <li>• Digital Twins & Cyber-Physical Systems</li>
                    <li>• Autonomous Systems & Drones</li>
                </ul>
            </div>
            <!-- Track 3 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T3</span>
                    Cybersecurity & Emerging Computing
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Blockchain & Digital Trust</li>
                    <li>• Privacy & Data Protection</li>
                    <li>• Ethical Hacking & Cyber Forensics</li>
                    <li>• Cloud, Edge & Quantum Computing</li>
                    <li>• Cryptography & Network Security</li>
                </ul>
            </div>
            <!-- Track 4 -->
            <div class="p-10 bg-slate-50 dark:bg-slate-800 rounded-[2.5rem] border border-gray-100 dark:border-slate-700">
                <h3 class="text-xl font-black text-primary-blue dark:text-white mb-6 uppercase tracking-tighter flex items-center gap-4">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center text-xs">T4</span>
                    Sustainable & Smart Technologies
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400 font-medium">
                    <li>• Smart Cities & Intelligent Infrastructure</li>
                    <li>• Green Computing & Sustainable Tech</li>
                    <li>• Energy Monitoring & Optimization</li>
                    <li>• Disaster Prediction & Risk Management</li>
                    <li>• Smart Transportation & Mobility</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Guidelines Section -->
<section class="py-20 px-8 bg-slate-50 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
        <div class="space-y-8">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tighter">Abstract Guidelines</h2>
            <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-gray-100 dark:border-slate-800 space-y-4 text-sm text-gray-600 dark:text-gray-400">
                <p>• <strong>Length:</strong> 200–300 words</p>
                <p>• <strong>Required:</strong> Purpose/Objectives, Methodology, Key Findings</p>
                <p>• <strong>Keywords:</strong> 4–6 keywords at the end</p>
                <p class="pt-4 border-t border-gray-50 dark:border-slate-800 text-blue-600 font-bold uppercase text-[10px]">Manuscript Requirements</p>
                <p>• <strong>Paper length:</strong> 3000–6000 words</p>
                <p>• <strong>Format:</strong> APA style (latest edition)</p>
                <p>• <strong>Font:</strong> Times New Roman, Size 12, 1.5 spacing</p>
            </div>
        </div>
        <div class="space-y-8">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tighter">Publication</h2>
            <div class="bg-primary-blue text-white p-8 rounded-2xl shadow-2xl shadow-blue-900/40 space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-accent-yellow rounded-xl flex items-center justify-center text-primary-blue text-xl">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9 4.804A7.994 7.994 0 0111 4c1.068 0 2.082.209 3 .588V13c-.918-.379-1.932-.588-3-.588-1.068 0-2.082.209-3 .588V4.804zM3 13V4.804A7.994 7.994 0 015 4c1.068 0 2.082.209 3 .588V13c-.918-.379-1.932-.588-3-.588-1.068 0-2.082.209-3 .588zM17 13.5l-2-1V5l2 1v7.5zm-14-1V5l2-1v7.5l-2 1z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold italic">JIEEE Partnership</h3>
                </div>
                <p class="text-blue-100 leading-relaxed">All accepted papers will be published in the <strong>Journal of Informatics Electrical and Electronics Engineering (JIEEE)</strong> following a rigorous peer-review process.</p>
                
            </div>
        </div>
    </div>
</section>

<!-- Registration & Important Dates -->
<section class="py-20 px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        <div>
            <h2 class="text-2xl font-black text-primary-blue dark:text-white mb-10 uppercase tracking-tighter">Timeline</h2>
            <div class="space-y-6">
                @foreach($dates as $item)
                <div class="flex items-center justify-between p-2 rounded-1xl {{ $item->is_highlighted ? 'bg-blue-600 text-white shadow-xl shadow-blue-900/20' : 'bg-slate-50 dark:bg-slate-900 border border-gray-100 dark:border-slate-800' }}">
                    <span class="text-sm font-black uppercase tracking-widest">{{ $item->label }}</span>
                    <span class="font-bold {{ $item->is_highlighted ? 'text-accent-yellow' : 'text-primary-blue dark:text-blue-400' }}">{{ $item->date_value }}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="text-2xl font-black text-primary-blue dark:text-white mb-10 uppercase tracking-tighter">Registration Process</h2>
            <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-gray-100 dark:border-slate-800 space-y-8">
                <div class="flex items-center justify-between border-b dark:border-slate-800 pb-4">
                    <span class="font-bold text-gray-500">Registration Fee</span>
                    <span class="text-2xl font-black text-primary-blue dark:text-accent-yellow">₹1500</span>
                </div>
                <ol class="space-y-4 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex gap-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 text-[10px] font-black">1</span>
                        <span>Complete the <a href="https://forms.gle/JGTN1HrSCGYc7CyK7" target="_blank" class="text-blue-600 dark:text-blue-400 font-bold underline">Online Registration Form</a>.</span>
                    </li>
                    <li class="flex gap-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 text-[10px] font-black">2</span>
                        <span>Make payment via NEFT/UPI/IMPS (<a href="{{ route('registration') }}" class="text-blue-600 dark:text-blue-400 font-bold underline">View Bank Details</a>).</span>
                    </li>
                    <li class="flex gap-4">
                        <span class="w-6 h-6 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 text-[10px] font-black">3</span>
                        <span>Upload payment confirmation screenshot in the form.</span>
                    </li>
                </ol>

                <!-- Quick QR Payment -->
                <div class="pt-6 border-t dark:border-slate-800 text-center">
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 text-left">Quick UPI Payment</p>
                    <div class="bg-gray-50 dark:bg-slate-800 p-3 rounded-xl inline-block border border-gray-100 dark:border-slate-700">
                        <img src="{{ asset('qr.png') }}" alt="Payment QR" class="w-24 h-24 object-contain">
                    </div>
                    <p class="text-[9px] font-bold text-gray-500 mt-2">Scan with GPay, PhonePe or Paytm</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
