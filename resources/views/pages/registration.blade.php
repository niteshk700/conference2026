@extends('layouts.conference')

@section('title', 'Registration | ICETA-2026')

@section('content')
<!-- Page Title -->
<section class="bg-primary-blue dark:bg-black py-20 text-center transition-colors duration-300">
    <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tight mb-2">Registration</h1>
    <p class="text-accent-yellow font-bold uppercase tracking-widest text-sm">Join the Global Technical Hub</p>
</section>

<section class="py-24 px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Fees -->
        <div class="lg:col-span-1 space-y-8">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8 transition-colors duration-300">Registration Fees</h2>
            <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-2xl shadow-blue-900/5 dark:shadow-none border border-gray-50 dark:border-slate-700 overflow-hidden transition-colors duration-300">
                <div class="p-8 space-y-8">
                    <div class="flex justify-between items-center group">
                        <div class="space-y-1">
                            <p class="font-black text-primary-blue dark:text-white transition-colors duration-300">Paper Presentation</p>
                            <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Standard Fee</p>
                        </div>
                        <p class="text-2xl font-black text-blue-600 dark:text-blue-400 transition-colors duration-300">₹ 1500</p>
                    </div>
                    <div class="flex justify-between items-center group pt-8 border-t border-gray-100 dark:border-slate-700">
                        <div class="space-y-1">
                            <p class="font-black text-primary-blue dark:text-white transition-colors duration-300">CSI Members</p>
                            <p class="text-xs text-green-500 font-bold uppercase tracking-wider">20% Discount</p>
                        </div>
                        <p class="text-2xl font-black text-blue-600 dark:text-blue-400 transition-colors duration-300">₹ 1200</p>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-slate-900/50 p-6 text-center text-xs font-bold text-gray-400 uppercase tracking-widest border-t border-gray-100 dark:border-slate-700">
                    Hybrid Mode Supported
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="lg:col-span-2 space-y-8">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8 transition-colors duration-300">Submission Timeline</h2>
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-1 bg-slate-100 dark:bg-slate-800 hidden md:block transition-colors duration-300"></div>
                <div class="space-y-6">
                    @foreach($dates as $item)
                    <div class="relative md:pl-20 group">
                        <div class="absolute left-7 top-1/2 -translate-y-1/2 w-3 h-3 rounded-full bg-white dark:bg-slate-900 border-2 border-accent-yellow hidden md:block z-10 group-hover:scale-150 transition-transform"></div>
                        <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-50 dark:border-slate-700 shadow-sm flex flex-col md:flex-row justify-between items-center hover:border-accent-yellow/50 transition-all">
                            <p class="font-black text-primary-blue dark:text-white uppercase tracking-tight transition-colors duration-300">{{ $item->label }}</p>
                            <p class="text-blue-600 dark:text-blue-400 font-black text-lg transition-colors duration-300">{{ $item->date_value }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment -->
<section class="py-24 bg-slate-50 dark:bg-slate-900/50 px-8 transition-colors duration-300">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="space-y-8">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8 transition-colors duration-300">Registration Process</h2>
            <div class="space-y-4">
                @foreach(['Complete the online registration form on or before the deadline.', 'Make payment via NEFT / UPI / IMPS.', 'Upload the payment confirmation screenshot during registration.', 'Download the official receipt after successful submission.'] as $index => $step)
                <div class="flex gap-6 items-start">
                    <div class="w-10 h-10 bg-white dark:bg-slate-800 shadow-md rounded-full flex items-center justify-center font-black text-primary-blue dark:text-white shrink-0 transition-colors duration-300">{{ $index + 1 }}</div>
                    <p class="text-gray-600 dark:text-gray-400 font-medium leading-relaxed pt-2">{{ $step }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="bg-white dark:bg-slate-800 p-10 rounded-3xl shadow-2xl shadow-blue-900/5 dark:shadow-none border border-gray-50 dark:border-slate-700 transition-colors duration-300">
            <h2 class="text-2xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-8 transition-colors duration-300">Payment Details</h2>
            <div class="space-y-6 text-sm">
                <div class="grid grid-cols-2 gap-4 border-b border-gray-50 dark:border-slate-700 pb-4">
                    <p class="text-gray-400 font-bold uppercase text-[10px] tracking-widest">Beneficiary</p>
                    <p class="font-bold text-primary-blue dark:text-white text-right">NITRA Technical Campus</p>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b border-gray-50 dark:border-slate-700 pb-4">
                    <p class="text-gray-400 font-bold uppercase text-[10px] tracking-widest">Bank Name</p>
                    <p class="font-bold text-primary-blue dark:text-white text-right">[Bank Placeholder]</p>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b border-gray-50 dark:border-slate-700 pb-4">
                    <p class="text-gray-400 font-bold uppercase text-[10px] tracking-widest">Account Number</p>
                    <p class="font-bold text-primary-blue dark:text-white text-right">[000000000000]</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <p class="text-gray-400 font-bold uppercase text-[10px] tracking-widest">IFSC Code</p>
                    <p class="font-bold text-primary-blue dark:text-white text-right">[IFSC000000]</p>
                </div>
            </div>
            <p class="mt-12 text-[10px] text-gray-400 font-bold uppercase tracking-widest text-center leading-relaxed">Please refer to the official brochure for verified bank details before making payment.</p>
        </div>
    </div>
</section>
@endsection
