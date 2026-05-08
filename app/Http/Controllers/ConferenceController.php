<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Hardcoded Settings & Data
     * Edit these arrays to manage site content.
     */
    private function getCommonData()
    {
        // Increment visitor count in DB on every request
        Setting::where('key', 'view_count')->increment('value');

        return [
            // Marquee announcements at the top
            'marquees' => collect([
                (object)['text' => 'Full Paper Submission Deadline: 30th May 2026', 'url' => '#'],
                (object)['text' => 'Registration Open for ICETA-2026', 'url' => '#'],
            ]),

            // Global site settings (Used in Hero and Footer)
            'settings' => [
                'hero_title' => 'Emerging Technologies and its Applications',
                'hero_subtitle' => 'International Conference on',
                'conference_overview' => 'The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators.',
                'key_focus_areas' => 'Advanced Computing, Artificial Intelligence, Cyber Security, Internet of Things (IoT), Sustainable Development',
                'view_count' => $this->getVisitorCount(),
            ],

            // Navigation Pages
            'pages' => collect([
                (object)['title' => 'Home', 'slug' => 'home'],
                (object)['title' => 'About', 'slug' => 'about'],
                (object)['title' => 'Committee', 'slug' => 'committee'],
                (object)['title' => 'Call for Paper', 'slug' => 'call-for-paper'],
                (object)['title' => 'Paper Submission', 'slug' => 'paper-submission'],
                (object)['title' => 'Registration', 'slug' => 'registration'],
                (object)['title' => 'Contact', 'slug' => 'contact'],
            ]),

            // Default Page object for views that expect $page
            'page' => null, 
        ];
    }

    private function getVisitorCount()
    {
        $count = Setting::where('key', 'view_count')->first();
        return $count ? $count->value : 0;
    }

    public function home()
    {
        $dates = collect([

            (object)['date_value' => '30th May 2026', 'label' => 'Full Paper Submission', 'is_highlighted' => true],
            (object)['date_value' => '15th June 2026', 'label' => 'Acceptance Notification', 'is_highlighted' => false],
            (object)['date_value' => '30th June 2026', 'label' => 'Registration Deadline', 'is_highlighted' => false],
            (object)['date_value' => '17-18 July 2026', 'label' => 'Conference Dates', 'is_highlighted' => true],
        ]);

        return view('pages.home', array_merge($this->getCommonData(), ['dates' => $dates]));
    }

    public function about()
    {
        return view('pages.about', $this->getCommonData());
    }

    public function committee()
    {
        $committees = collect([
            'Advisory Committee' => collect([
                (object)['name' => 'Prof. Dr. Example Name', 'role' => 'Patron', 'affiliation' => 'Director, NITRA Technical Campus'],
                (object)['name' => 'Dr. Another Name', 'role' => 'Co-Patron', 'affiliation' => 'Professor, AKTU Lucknow'],
            ]),
            'Organizing Committee' => collect([
                (object)['name' => 'Dr. Coordinator', 'role' => 'Convener', 'affiliation' => 'HOD, CSE Department'],
            ]),
        ]);

        return view('pages.committee', array_merge($this->getCommonData(), [
            'committees' => $committees
        ]));
    }

    public function callForPaper()
    {
        return view('pages.call-for-paper', $this->getCommonData());
    }

    public function paperSubmission()
    {
        return view('pages.paper-submission', $this->getCommonData());
    }

    public function registration()
    {
        $dates = collect([
            (object)['date_value' => '30th May 2026', 'label' => 'Full Paper Submission', 'is_highlighted' => true],
            (object)['date_value' => '17-18 July 2026', 'label' => 'Conference Dates', 'is_highlighted' => true],
        ]);
        return view('pages.registration', array_merge($this->getCommonData(), ['dates' => $dates]));
    }

    public function contact()
    {
        return view('pages.contact', $this->getCommonData());
    }
}
