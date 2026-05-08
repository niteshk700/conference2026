@extends('layouts.conference')

@section('title', 'Contact Us | ICETA-2026')

@section('content')
<!-- Page Title -->
<section class="bg-primary-blue dark:bg-black py-20 text-center transition-colors duration-300">
    <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Contact Us</h1>
    <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Reach Out to the ICETA Team</p>
</section>

<section class="py-24 px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
        <!-- Contact Info -->
        <div class="space-y-12">
            <div>
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8 flex items-center gap-4 transition-colors duration-300">
                    <div class="w-1.5 h-8 bg-accent-yellow"></div>
                    Get in Touch
                </h2>
                <div class="space-y-8">
                    @php
                        $contacts = [
                            ['label' => 'Address', 'value' => 'NITRA Technical Campus, Sector-23, Raj Nagar, Ghaziabad, UP, India', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z'],
                            ['label' => 'Email', 'value' => 'confrence2026@nitra.ac.in', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                            ['label' => 'Mobile', 'value' => '8368840122, 8368184387', 'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z'],
                            ['label' => 'Website', 'value' => 'www.nitra.ac.in', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18'],
                        ];
                    @endphp

                    @foreach($contacts as $item)
                    <div class="flex gap-6 items-start group">
                        <div class="w-12 h-12 bg-white dark:bg-slate-800 shadow-xl shadow-blue-900/5 dark:shadow-none rounded-2xl flex items-center justify-center shrink-0 border border-gray-50 dark:border-slate-700 group-hover:border-accent-yellow transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">{{ $item['label'] }}</p>
                            <p class="text-primary-blue dark:text-gray-300 font-bold text-lg leading-relaxed transition-colors duration-300">{{ $item['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white dark:bg-slate-800 p-12 rounded-3xl shadow-2xl shadow-blue-900/10 dark:shadow-none border border-gray-50 dark:border-slate-700 transition-colors duration-300">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8 transition-colors duration-300">Send an Inquiry</h2>
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Your Name</label>
                        <input type="text" name="name" class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-900/50 border border-slate-100 dark:border-slate-700 rounded-xl focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-600/10 focus:border-blue-600 transition-all text-sm font-medium dark:text-white" required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Email Address</label>
                        <input type="email" name="email" class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-900/50 border border-slate-100 dark:border-slate-700 rounded-xl focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-600/10 focus:border-blue-600 transition-all text-sm font-medium dark:text-white" required>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Subject</label>
                    <input type="text" name="subject" class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-900/50 border border-slate-100 dark:border-slate-700 rounded-xl focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-600/10 focus:border-blue-600 transition-all text-sm font-medium dark:text-white" required>
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-1">Message</label>
                    <textarea name="message" rows="5" class="w-full px-4 py-4 bg-slate-50 dark:bg-slate-900/50 border border-slate-100 dark:border-slate-700 rounded-xl focus:bg-white dark:focus:bg-slate-800 focus:ring-2 focus:ring-blue-600/10 focus:border-blue-600 transition-all text-sm font-medium dark:text-white" required></textarea>
                </div>
                <button type="submit" class="cta-button w-full">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Live Map -->
<section class="h-[500px] w-full border-t border-gray-100 dark:border-slate-800 transition-colors duration-300">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.3331308658994!2d77.4559226!3d28.689136799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf19d0066c2bd%3A0xce2128423fa59ccd!2sNITRA%20Technical%20Campus!5e1!3m2!1sen!2sin!4v1778269853032!5m2!1sen!2sin" 
        class="w-full h-[500px]" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>
@endsection
