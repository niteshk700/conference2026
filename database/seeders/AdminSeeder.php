<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Committee;
use App\Models\ImportantDate;
use App\Models\Page;
use App\Models\Marquee;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Settings
        Setting::updateOrCreate(['key' => 'marquee_text'], ['value' => 'Welcome to ICETA-2026. Submit your abstract before May 25, 2026. Hybrid mode conference on July 17-18, 2026.']);
        Setting::updateOrCreate(['key' => 'view_count'], ['value' => '1']);
        Setting::updateOrCreate(['key' => 'hero_title'], ['value' => 'Emerging Technologies & its Applications']);
        Setting::updateOrCreate(['key' => 'hero_subtitle'], ['value' => 'International Conference on']);
        Setting::updateOrCreate(['key' => 'conference_overview'], ['value' => 'The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators to exchange knowledge and insights on the latest advancements in emerging technologies.']);
        Setting::updateOrCreate(['key' => 'key_focus_areas'], ['value' => 'Advanced Computing, Artificial Intelligence, Cyber Security, Internet of Things (IoT), Sustainable Development']);

        // Committee Categories
        $categories = [
            'Patrons and Chairs',
            'Conference Secretaries',
            'Advisory Committee',
            'Organising Committee',
            'Technical Program Committee',
            'Sub Committees: Registration',
            'Sub Committees: Inaugural and Lamp Lighting',
            'Sub Committees: Transportation, Accommodation & Hospitality',
            'Sub Committees: Reception, Decoration & Stage Management',
            'Sub Committees: Technical Sessions',
            'Sub Committees: Finance & Audit',
            'Sub Committees: Food',
            'Sub Committees: Press Publicity & Media Management',
        ];

        foreach ($categories as $index => $cat) {
            if (!Committee::where('category', $cat)->exists()) {
                Committee::create([
                    'name' => 'Placeholder Member',
                    'role' => 'Member',
                    'category' => $cat,
                    'order' => $index
                ]);
            }
        }

        // Important Dates
        $dates = [
            ['label' => 'Abstract Submission', 'date' => '25 May 2026'],
            ['label' => 'Notification', 'date' => '30 May 2026'],
            ['label' => 'Full Paper Submission', 'date' => '10 June 2026'],
            ['label' => 'Registration Deadline', 'date' => '15 June 2026'],
        ];

        // Reset Marquees for a clean state
        Marquee::truncate();
        
        Marquee::create([
            'text' => 'Welcome to ICETA-2026: International Conference on Emerging Technologies and its Applications. Join us on 17th-18th July 2026.',
            'order' => 0
        ]);

        foreach ($dates as $index => $date) {
            $importantDate = ImportantDate::updateOrCreate(
                ['label' => $date['label']],
                ['date_value' => $date['date'], 'order' => $index]
            );

            // Create a marquee for each important date
            Marquee::create([
                'text' => "Upcoming Deadline: {$importantDate->label} - {$importantDate->date_value}",
                'order' => $index + 1,
                'is_active' => true
            ]);
        }

        // Pages (Dynamic Menu & Content)
        $pages = [
            [
                'title' => 'Home', 
                'slug' => 'home',
                'content' => '<!-- Managed via components and settings -->'
            ],
            [
                'title' => 'About', 
                'slug' => 'about',
                'content' => '<div class="flex flex-col md:flex-row gap-16 items-center">
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
                </div>'
            ],
            [
                'title' => 'Committee', 
                'slug' => 'committee',
                'content' => '<!-- Automatically generated from Committee table -->'
            ],
            [
                'title' => 'Call for Papers', 
                'slug' => 'call-for-paper',
                'content' => '<div class="space-y-12">
                    <div class="text-center">
                        <h2 class="text-3xl font-black text-primary-blue dark:text-white uppercase tracking-tight mb-4">Themes and Topics</h2>
                        <div class="w-20 h-1 bg-accent-yellow mx-auto"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-gray-100 dark:border-slate-700 shadow-xl transition-all hover:-translate-y-2">
                            <h3 class="text-xl font-bold text-blue-600 mb-4">Artificial Intelligence</h3>
                            <ul class="space-y-2 text-gray-600 dark:text-gray-400 text-sm list-disc pl-5">
                                <li>Machine Learning & Deep Learning</li>
                                <li>Natural Language Processing</li>
                                <li>Computer Vision</li>
                                <li>AI in Healthcare</li>
                            </ul>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-gray-100 dark:border-slate-700 shadow-xl transition-all hover:-translate-y-2">
                            <h3 class="text-xl font-bold text-blue-600 mb-4">Cloud & IoT</h3>
                            <ul class="space-y-2 text-gray-600 dark:text-gray-400 text-sm list-disc pl-5">
                                <li>Edge Computing</li>
                                <li>IoT Architecture</li>
                                <li>Cloud Security</li>
                                <li>Smart Infrastructure</li>
                            </ul>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-gray-100 dark:border-slate-700 shadow-xl transition-all hover:-translate-y-2">
                            <h3 class="text-xl font-bold text-blue-600 mb-4">Data Science</h3>
                            <ul class="space-y-2 text-gray-600 dark:text-gray-400 text-sm list-disc pl-5">
                                <li>Big Data Analytics</li>
                                <li>Statistical Modeling</li>
                                <li>Data Visualization</li>
                                <li>Business Intelligence</li>
                            </ul>
                        </div>
                    </div>
                </div>'
            ],
            [
                'title' => 'Paper Submission', 
                'slug' => 'paper-submission',
                'content' => '<div class="max-w-4xl mx-auto space-y-12">
                    <div class="bg-blue-600 text-white p-12 rounded-[3rem] shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                        <h2 class="text-3xl font-black mb-6 uppercase tracking-tight">Submission Guidelines</h2>
                        <ul class="space-y-4 text-blue-50 font-medium">
                            <li class="flex items-start gap-3">
                                <span class="bg-white/20 p-1 rounded-lg">✓</span>
                                <span>Papers must be original and not submitted elsewhere.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="bg-white/20 p-1 rounded-lg">✓</span>
                                <span>Follow the IEEE double-column format.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="bg-white/20 p-1 rounded-lg">✓</span>
                                <span>Maximum page limit is 6 pages.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="#" class="inline-block bg-primary-blue hover:bg-blue-700 text-white font-black px-12 py-5 rounded-2xl shadow-xl transition-all uppercase tracking-widest text-sm">
                            Submit via Microsoft CMT
                        </a>
                    </div>
                </div>'
            ],
            [
                'title' => 'Registration', 
                'slug' => 'registration',
                'content' => '<div class="space-y-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div class="bg-slate-950 p-10 rounded-[3rem] border border-slate-800 shadow-2xl">
                            <h3 class="text-white font-black uppercase text-xl mb-8 tracking-tight">Registration Fees</h3>
                            <div class="space-y-6">
                                <div class="flex justify-between items-center pb-4 border-b border-slate-800">
                                    <span class="text-slate-400 font-bold">Academician</span>
                                    <span class="text-accent-yellow font-black text-xl">₹ 5000</span>
                                </div>
                                <div class="flex justify-between items-center pb-4 border-b border-slate-800">
                                    <span class="text-slate-400 font-bold">Industry Professional</span>
                                    <span class="text-accent-yellow font-black text-xl">₹ 7000</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-slate-400 font-bold">Student</span>
                                    <span class="text-accent-yellow font-black text-xl">₹ 3000</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-10 rounded-[3rem] shadow-2xl border border-gray-100 dark:border-slate-700">
                            <h3 class="text-primary-blue dark:text-white font-black uppercase text-xl mb-8 tracking-tight">Bank Details</h3>
                            <div class="space-y-4 text-gray-600 dark:text-gray-400 font-medium">
                                <p>Bank Name: State Bank of India</p>
                                <p>Account Name: NITRA Technical Campus</p>
                                <p>Account Number: XXXXXXXXXXXX</p>
                                <p>IFSC Code: SBIN000XXXX</p>
                            </div>
                        </div>
                    </div>
                </div>'
            ],
            [
                'title' => 'Contact Us', 
                'slug' => 'contact',
                'content' => '<div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <div class="space-y-8">
                        <h2 class="text-3xl font-black text-primary-blue dark:text-white uppercase tracking-tight">Get in Touch</h2>
                        <div class="space-y-6">
                            <div class="flex items-start gap-6">
                                <div class="bg-blue-100 dark:bg-blue-900/30 p-4 rounded-2xl">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-primary-blue dark:text-white">Venue</h4>
                                    <p class="text-gray-600 dark:text-gray-400">NITRA Technical Campus, Sector-23, Ghaziabad, UP-201002</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-6">
                                <div class="bg-blue-100 dark:bg-blue-900/30 p-4 rounded-2xl">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-primary-blue dark:text-white">Email</h4>
                                    <p class="text-gray-600 dark:text-gray-400">iceta2026@nitratechnicalcampus.edu.in</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-900/50 p-10 rounded-[3rem] border border-gray-100 dark:border-slate-800">
                        <!-- Contact Form Placeholder -->
                        <p class="text-center text-gray-500 italic">Interactive contact form is managed via internal services.</p>
                    </div>
                </div>'
            ],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']], 
                ['title' => $page['title'], 'content' => $page['content']]
            );
        }
    }
}
