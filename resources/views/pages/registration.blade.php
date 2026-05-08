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

        <!-- Deadlines -->
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
    </div>

</div>
@endsection
