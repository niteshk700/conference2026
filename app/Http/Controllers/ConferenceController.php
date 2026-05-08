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
        // Increment visitor count in DB on every request
        Setting::where('key', 'view_count')->increment('value');

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
            'Eminent Keynote Speakers' => collect([
                (object)['name' => 'Prof. (Dr.) Abhay Bansal', 'role' => 'Keynote Speaker', 'affiliation' => 'Bennett University, Greater Noida'],
                (object)['name' => 'Prof. (Dr.) Ajay Rana', 'role' => 'Keynote Speaker', 'affiliation' => 'Amity University, Greater Noida'],
                (object)['name' => 'Prof. (Dr.) Arun Sharma', 'role' => 'Keynote Speaker', 'affiliation' => 'Indira Gandhi Delhi Technical University'],
                (object)['name' => 'Prof. (Dr.) Uma Shankar Pandey', 'role' => 'Keynote Speaker', 'affiliation' => 'Delhi University'],
                (object)['name' => 'Dr. Avadhesh Kumar Gupta', 'role' => 'Keynote Speaker', 'affiliation' => 'IILM University, Greater Noida'],
                (object)['name' => 'Dr. Sandeep Poddar', 'role' => 'Keynote Speaker', 'affiliation' => 'Lincoln University College, Malaysia'],
                (object)['name' => 'Prof. Kumud Saxena', 'role' => 'Keynote Speaker', 'affiliation' => 'Lloyd Institute of Engineering and Technology'],
                (object)['name' => 'Dr. Manoj Sharma', 'role' => 'Keynote Speaker', 'affiliation' => 'Bio-statistics Professional, California, USA'],
                (object)['name' => 'Dr. Ankit Vidyarthi', 'role' => 'Keynote Speaker', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
                (object)['name' => 'Mr. Saurabh Saxena', 'role' => 'Keynote Speaker', 'affiliation' => 'AwareBase Corp, Canada'],
            ]),

            'Registration Committee' => collect([
                (object)['name' => 'Ms. Priya Tyagi', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Abhay Chaudhary', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Madan Gopal', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'role' => 'Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Inaugural and Lamp Lighting' => collect([
                (object)['name' => 'Ms. Divya Pachauri', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Priyanka Arora', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'role' => 'Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Anchoring Committee' => collect([
                (object)['name' => 'Mr. Partha Basu', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Meghna Tyagi', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Transportation, Accommodation & Hospitality' => collect([
                (object)['name' => 'Mr. Shashi Bhushan Bahuguna', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Neeraj Sharma', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Dharmendra Kumar', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'role' => 'Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Reception, Decoration & Stage Management' => collect([
                (object)['name' => 'Dr. Roopam Chauhan', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Sanjivani Sharma', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'role' => 'Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Technical Sessions Committee' => collect([
                (object)['name' => 'Mr. R. C. Yadaw', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Rishab Raj', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Rajesh', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Divya Pachauri', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Priyanka Arora', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Finance & Audit Committee' => collect([
                (object)['name' => 'Mr. Atul Baijal', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. K. K. Dewan', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. A.P. Srivastava', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Sachin Bhatt', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Food Committee' => collect([
                (object)['name' => 'Mr. Saurabh Jain', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Saurabh Pathak', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'role' => 'Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Press Publicity & Media Management' => collect([
                (object)['name' => 'Mr. Sanjay Gupta', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Neeraj Sharma', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Videography & Photography Committee' => collect([
                (object)['name' => 'Mr. Akash Kumar', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Raju', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Website Management Committee' => collect([
                (object)['name' => 'Mr. Nitesh Kumar', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Shiva Chaudhary', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Certificate Distribution Committee' => collect([
                (object)['name' => 'Ms. Akansha Rajput', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Mohd Shahanawaz', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Rohitash Kumar', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'role' => 'Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Discipline Committee' => collect([
                (object)['name' => 'Dr. Rishabh Raj', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Sanjay Gupta', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Harendra Kumar Singh', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Yogesh Tiwari', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Purchase Committee' => collect([
                (object)['name' => 'Mr. K. K. Dewan', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. A.P. Srivastava', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Rizvi', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Praveen Kumar', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),

            'Technical Program Committee' => collect([
                (object)['name' => 'Dr. S. K. Dubey', 'role' => 'Professor-Head CSE', 'affiliation' => 'Amity University, Noida'],
                (object)['name' => 'Dr. Amit Singhal', 'role' => 'Professor-Head CSE', 'affiliation' => 'RKGIT, Ghaziabad'],
                (object)['name' => 'Dr. Jitendra Singh', 'role' => 'Professor-Head CSE', 'affiliation' => 'SRM Institute of Science and Technology'],
                (object)['name' => 'Dr. Pawan Upadhyay', 'role' => 'Professor-CSE', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
                (object)['name' => 'Dr. Arun Prakash Agrawal', 'role' => 'Professor-CSE', 'affiliation' => 'Bennett University, Greater Noida'],
                (object)['name' => 'Dr. Gaurav Agarwal', 'role' => 'Professor-CSE', 'affiliation' => 'Galgotias University, Greater Noida'],
                (object)['name' => 'Dr. Analap Pathak', 'role' => 'Associate Professor-CSE', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Dr. Jaswinder Singh', 'role' => 'Associate Professor-CSE', 'affiliation' => 'IILM University, Greater Noida'],
                (object)['name' => 'Dr. Ashish Dixit', 'role' => 'Associate Professor-CSE', 'affiliation' => 'AKGEC, Ghaziabad'],
                (object)['name' => 'Dr. Sachin Jain', 'role' => 'Associate Professor-CSE', 'affiliation' => 'AKGEC, Ghaziabad'],
                (object)['name' => 'Dr. Kadambari Agarwal', 'role' => 'Professor-CSE', 'affiliation' => 'ABESEC, Ghaziabad'],
                (object)['name' => 'Dr. Vivek Srivastava', 'role' => 'Associate Professor-CSE', 'affiliation' => 'ABESEC, Ghaziabad'],
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
