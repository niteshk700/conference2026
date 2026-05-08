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
                (object)['text' => 'Abstract Submission Deadline: 25 May 2026', 'url' => route('paper-submission')],
                (object)['text' => 'Notification of Acceptance: 30 May 2026', 'url' => route('paper-submission')],
                (object)['text' => 'Full Paper Submission Deadline: 10 June 2026', 'url' => route('paper-submission')],
                (object)['text' => 'Registration Deadline: 15 June 2026', 'url' => route('registration')],
                (object)['text' => 'Conference Dates: 17th - 18th July 2026', 'url' => route('home')],
            ]),

            // Global site settings (Used in Hero and Footer)
            'settings' => [
                'hero_title' => 'Emerging Technologies and its Applications',
                'hero_subtitle' => 'International Conference on',
                'conference_overview' => 'The International Conference on Emerging Technologies and its Applications (ICETA-2026) aims to bring together academicians, researchers, industry experts, and innovators to exchange knowledge and insights on the latest advancements in emerging technologies.',
                'key_focus_areas' => 'Advanced Computing, Artificial Intelligence, Cyber Security, Internet of Things (IoT), Sustainable Development, Robotics, Data Analytics',
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
            (object)['date_value' => '25 May 2026', 'label' => 'Abstract Submission', 'is_highlighted' => false],
            (object)['date_value' => '30 May 2026', 'label' => 'Acceptance Notification', 'is_highlighted' => false],
            (object)['date_value' => '10 June 2026', 'label' => 'Full Paper Submission', 'is_highlighted' => true],
            (object)['date_value' => '15 June 2026', 'label' => 'Registration Deadline', 'is_highlighted' => false],
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
            'Conference Leadership' => collect([
                (object)['name' => 'Prof. (Dr.) J.P Panday', 'role' => 'Chief Patron', 'affiliation' => 'Vice Chancellor, AKTU Lucknow'],
                (object)['name' => 'Shri. Vidit Jain', 'role' => 'Chief Patron', 'affiliation' => 'Chairman-NITRA Council of Admin'],
                (object)['name' => 'Dr. M.S. Parmar', 'role' => 'Patron', 'affiliation' => 'Director General, NITRA'],
                (object)['name' => 'Dr. B.K Sharma', 'role' => 'Convener', 'affiliation' => 'Director, NTC'],
                (object)['name' => 'Mr. K.K Dewan', 'role' => 'Coordinator', 'affiliation' => 'Registrar, NITRA Technical Campus'],
                (object)['name' => 'Dr. A.P Srivastava', 'role' => 'Coordinator', 'affiliation' => 'Head of Department (CSE), NTC'],
            ]),

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

            'Advisory Committee' => collect([
                (object)['name' => 'Dr. Sandeep Poddar', 'role' => 'Member', 'affiliation' => 'Lincoln University College, Malaysia'],
                (object)['name' => 'Dr. Manoj Sharma', 'role' => 'Member', 'affiliation' => 'Bio-statistics Professional, California, USA'],
                (object)['name' => 'Prof. (Dr.) Mirela Blaga', 'role' => 'Member', 'affiliation' => 'Gheorghe Asachi din Iasi, Romania'],
                (object)['name' => 'Mr. Saurabh Saxena', 'role' => 'Member', 'affiliation' => 'AwareBase Corp, Canada'],
                (object)['name' => 'Mr. Tara Shanker', 'role' => 'Member', 'affiliation' => 'MeitY, Govt. of India'],
                (object)['name' => 'Mr. Arvind Kumar', 'role' => 'Member', 'affiliation' => 'Senior Advisor at C-DAC, Govt. of India'],
                (object)['name' => 'Prof. (Dr.) Abhay Bansal', 'role' => 'Member', 'affiliation' => 'Bennett University, Greater Noida'],
                (object)['name' => 'Prof. (Dr.) Ajay Rana', 'role' => 'Member', 'affiliation' => 'Amity University, Greater Noida'],
                (object)['name' => 'Prof. (Dr.) K. P. Yadav', 'role' => 'Member', 'affiliation' => 'MATS University, Raipur'],
                (object)['name' => 'Prof. (Dr.) Anil K Ahlawat', 'role' => 'Member', 'affiliation' => 'IMS Engineering College'],
                (object)['name' => 'Mr. Saurabh Agrawal', 'role' => 'Member', 'affiliation' => 'Patron & Past Chairman, CSI'],
                (object)['name' => 'Mr. Gaurav Sharma', 'role' => 'Member', 'affiliation' => 'Director - STPI, MeitY, Govt. of India'],
                (object)['name' => 'Prof. (Dr.) Nanhay Singh', 'role' => 'Member', 'affiliation' => 'NSUT, East Campus, Delhi'],
                (object)['name' => 'Prof. (Dr.) Uma Shankar Pandey', 'role' => 'Member', 'affiliation' => 'Delhi University'],
                (object)['name' => 'Prof. (Dr.) Syed Zeeshan Hussain', 'role' => 'Member', 'affiliation' => 'Jamia Millia Islamia'],
                (object)['name' => 'Prof. (Dr.) Adesh Kr. Pandey', 'role' => 'Member', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Prof. (Dr.) Arun Sharma', 'role' => 'Member', 'affiliation' => 'Indira Gandhi Delhi Technical University'],
                (object)['name' => 'Prof. (Dr.) Sunil Kr Pandey', 'role' => 'Member', 'affiliation' => 'I.T.S, Mohan Nagar, Ghaziabad'],
                (object)['name' => 'Prof. (Dr.) R. P. Mahapatra', 'role' => 'Member', 'affiliation' => 'SRM Institute of Science and Technology'],
                (object)['name' => 'Prof. (Dr.) Vineet Kumar Sharma', 'role' => 'Member', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Dr. Pawan Singh', 'role' => 'Member', 'affiliation' => 'Amity School of Engineering and Technology, Lucknow'],
                (object)['name' => 'Dr. Ankit Vidyarthi', 'role' => 'Member', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
                (object)['name' => 'Dr. Pawan Upadhyay', 'role' => 'Member', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
                (object)['name' => 'Dr. Avadhesh Kumar Gupta', 'role' => 'Member', 'affiliation' => 'IILM University, Greater Noida'],
                (object)['name' => 'Dr. Bharat Bhushan Dua', 'role' => 'Member', 'affiliation' => 'Additional Director (Technical), (NIELIT) Delhi'],
                (object)['name' => 'Mr. S. K. Das', 'role' => 'Member', 'affiliation' => 'Cogniscient Business Solutions, NOIDA'],
                (object)['name' => 'Dr. S. K. Dubey', 'role' => 'Member', 'affiliation' => 'Amity University, NOIDA'],
                (object)['name' => 'Dr. Amit Singhal', 'role' => 'Member', 'affiliation' => 'RKGIT, Ghaziabad'],
                (object)['name' => 'Dr. Jitendra Singh', 'role' => 'Member', 'affiliation' => 'SRM Institute of Science and Technology'],
                (object)['name' => 'Dr. Arun Prakash Agrawal', 'role' => 'Member', 'affiliation' => 'Bennett University, Greater Noida'],
                (object)['name' => 'Dr. Birendra Kumar Sharma', 'role' => 'Member', 'affiliation' => 'MMMUT, Gorakhpur'],
                (object)['name' => 'Dr. Gaurav Agarwal', 'role' => 'Member', 'affiliation' => 'Galgotias University, Greater Noida'],
                (object)['name' => 'Mr. Arun Choudhary', 'role' => 'Member', 'affiliation' => 'HRIT University, Ghaziabad'],
                (object)['name' => 'Dr. Analp Pathak', 'role' => 'Member', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Dr. Jaswinder Singh', 'role' => 'Member', 'affiliation' => 'IILM University, Greater Noida'],
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

            'Organizing Committee' => collect([
                (object)['name' => 'Mr. Partha Basu', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Meghna Tyagi', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. R.C. Yadaw', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Sourabh Jain', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Rajesh Kumar', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Divya Pachauri', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Priya Tyagi', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Akansha Rajput', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Abhay Chaudhary', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Saurabh Pathak', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Mohd Shahanawaz', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Sanjivani Sharma', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Priyanka Arora', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Rishab Raj', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Roopam Chauhan', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Shashi Bhushan Bahuguna', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Sanjay Gupta', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Neeraj Sharma', 'role' => 'Member', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
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
            (object)['date_value' => '15 June 2026', 'label' => 'Registration Deadline', 'is_highlighted' => false],
            (object)['date_value' => '17-18 July 2026', 'label' => 'Conference Dates', 'is_highlighted' => true],
        ]);
        return view('pages.registration', array_merge($this->getCommonData(), ['dates' => $dates]));
    }

    public function contact()
    {
        return view('pages.contact', $this->getCommonData());
    }
}
