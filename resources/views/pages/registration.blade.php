@extends('layouts.conference')

@section('title', 'Registration | ICETA-2026')

@section('content')
<!-- Page Header -->
<section class="bg-primary-blue dark:bg-black py-20 text-center relative overflow-hidden transition-colors duration-300">
    <div class="relative z-10">
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Registration</h1>
        <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Join the Global Academic Dialogue</p>
    </div>
</section>

<!-- Content -->
<div class="max-w-7xl mx-auto px-8 py-24">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
        <!-- Fees & Process -->
        <div class="space-y-12">
            <div class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-gray-100 dark:border-slate-800 shadow-xl shadow-blue-900/5">
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8">Registration Fees</h2>
                <div class="space-y-6">
                    <div class="flex items-center justify-between pb-6 border-b dark:border-slate-800">
                        <span class="font-bold text-gray-500">Selected Paper Fee</span>
                        <span class="text-3xl font-black text-primary-blue dark:text-accent-yellow">₹1500</span>
                    </div>
                    <p class="text-xs font-black text-blue-600 uppercase tracking-widest">Special Offer: 20% Discount for CSI members</p>
                </div>
            </div>

            <div class="space-y-8">
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight">Payment Process</h2>
                <div class="space-y-6">
                    <div class="flex gap-6">
                        <span class="w-10 h-10 bg-blue-50 dark:bg-slate-800 rounded-xl flex items-center justify-center font-black text-blue-600">01</span>
                        <p class="text-sm md:text-base text-gray-600 dark:text-gray-400">Complete the online registration form on the official website on or before the deadline.</p>
                    </div>
                    <div class="flex gap-6">
                        <span class="w-10 h-10 bg-blue-50 dark:bg-slate-800 rounded-xl flex items-center justify-center font-black text-blue-600">02</span>
                        <p class="text-sm md:text-base text-gray-600 dark:text-gray-400">Make payment via <strong>NEFT / UPI / IMPS</strong>.</p>
                    </div>
                    <div class="flex gap-6">
                        <span class="w-10 h-10 bg-blue-50 dark:bg-slate-800 rounded-xl flex items-center justify-center font-black text-blue-600">03</span>
                        <p class="text-sm md:text-base text-gray-600 dark:text-gray-400">Upload the payment confirmation screenshot during registration.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deadlines & Registration -->
        <div class="space-y-12">
            <div>
                <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-10">Important Deadlines</h2>
                <div class="bg-slate-50 dark:bg-slate-900 p-10 rounded-[2.5rem] border border-gray-100 dark:border-slate-800">
                    <div class="space-y-8">
                        @foreach($dates as $item)
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                            <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">{{ $item->label }}</span>
                            <span class="text-lg font-black {{ $item->is_highlighted ? 'text-blue-600 dark:text-accent-yellow' : 'text-primary-blue dark:text-white' }}">{{ $item->date_value }}</span>
                        </div>
                        @endforeach
                        <div class="pt-8 border-t border-gray-200 dark:border-slate-800 text-[10px] font-bold text-gray-500 uppercase tracking-widest leading-relaxed">
                            Registration is mandatory for paper presenters and attendees. Late applications will not be entertained.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Registration Link -->
            <div class="p-10 bg-primary-blue dark:bg-blue-900/20 rounded-[2.5rem] text-center border border-primary-blue/10 shadow-2xl shadow-blue-900/20">
                <h3 class="text-xl font-black text-white uppercase tracking-tight mb-6">Ready to Register?</h3>
                <a href="https://forms.gle/JGTN1HrSCGYc7CyK7" target="_blank" class="inline-flex items-center justify-center gap-3 px-10 py-5 bg-accent-yellow text-primary-blue rounded-2xl font-black uppercase tracking-[0.2em] text-sm transition-all hover:scale-105 hover:shadow-2xl shadow-yellow-500/40 group">
                    Register Now
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
                <p class="text-[10px] font-bold text-white/50 uppercase tracking-widest mt-6">Redirects to Google Forms</p>
            </div>
        </div>
    </div>

    <!-- Payment Options -->
    <div class="mt-24">
        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-3xl font-black text-primary-blue dark:text-white mb-4 uppercase tracking-tight">Payment Details</h2>
            <div class="w-20 h-1.5 bg-accent-yellow mx-auto"></div>
            <p class="text-gray-500 text-sm mt-4 font-bold uppercase tracking-widest">Select one of the following bank options for registration fee payment</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Option 1: SBI -->
            <div class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-gray-100 dark:border-slate-800 shadow-xl shadow-blue-900/5 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                    <svg class="w-20 h-20 text-primary-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                </div>
                <div class="relative z-10">
                    <span class="inline-block px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-black text-[10px] uppercase tracking-widest rounded-lg mb-6">Option 01</span>
                    <h3 class="text-2xl font-black text-primary-blue dark:text-white mb-8">State Bank of India (SBI)</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between border-b dark:border-slate-800 pb-2">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Bank Name</span>
                            <span class="text-sm font-bold text-gray-800 dark:text-gray-200">State Bank of India (SBI)</span>
                        </div>
                        <div class="flex justify-between border-b dark:border-slate-800 pb-2">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Branch</span>
                            <span class="text-sm font-bold text-gray-800 dark:text-gray-200">Main Branch, Navyug Market, GZB</span>
                        </div>
                        <div class="flex justify-between border-b dark:border-slate-800 pb-2">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Account Number</span>
                            <span class="text-sm font-black text-blue-600 dark:text-accent-yellow tracking-wider">55065458457</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">IFSC Code</span>
                            <span class="text-sm font-black text-gray-800 dark:text-gray-200 tracking-wider">SBIN0000642</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Option 2: PNB -->
            <div class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-gray-100 dark:border-slate-800 shadow-xl shadow-blue-900/5 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                    <svg class="w-20 h-20 text-primary-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                </div>
                <div class="relative z-10">
                    <span class="inline-block px-3 py-1 bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-400 font-black text-[10px] uppercase tracking-widest rounded-lg mb-6">Option 02</span>
                    <h3 class="text-2xl font-black text-primary-blue dark:text-white mb-8">Punjab National Bank (PNB)</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between border-b dark:border-slate-800 pb-2">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Bank Name</span>
                            <span class="text-sm font-bold text-gray-800 dark:text-gray-200">Punjab National Bank (PNB)</span>
                        </div>
                        <div class="flex justify-between border-b dark:border-slate-800 pb-2">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Branch</span>
                            <span class="text-sm font-bold text-gray-800 dark:text-gray-200">Sanjay Nagar, Ghaziabad</span>
                        </div>
                        <div class="flex justify-between border-b dark:border-slate-800 pb-2">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Account Number</span>
                            <span class="text-sm font-black text-blue-600 dark:text-accent-yellow tracking-wider">9873002100002466</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">IFSC Code</span>
                            <span class="text-sm font-black text-gray-800 dark:text-gray-200 tracking-wider">PUNB0987300</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
