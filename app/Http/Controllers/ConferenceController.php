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
                (object)['text' => 'Abstract Submission Deadline: 25 May 2026', 'url' => '#'],
                (object)['text' => 'Notification of Acceptance: 30 May 2026', 'url' => '#'],
                (object)['text' => 'Full Paper Submission Deadline: 10 June 2026', 'url' => '#'],
                (object)['text' => 'Registration Deadline: 15 June 2026', 'url' => '#'],
                (object)['text' => 'Conference Dates: 17th - 18th July 2026', 'url' => '#'],
            ]),

            // Global site settings (Used in Hero and Footer)
            'settings' => [
                'hero_title' => 'Emerging Technologies and its Applications',
                'hero_subtitle' => 'International Conference',
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
        // TOGGLE: Set to true to show actual lists, false to show "Coming Soon"
        $isLive = false;

        // PRESERVED DATA (Hidden for now)
        $technicalProgramData = collect([
            (object)['name' => 'Dr. S. K. Dubey', 'affiliation' => 'Professor-Head CSE, Amity University, Noida'],
            (object)['name' => 'Dr. Amit Singhal', 'affiliation' => 'Professor-Head CSE, RKGIT, Ghaziabad'],
            (object)['name' => 'Dr. Jitendra Singh', 'affiliation' => 'Professor-Head CSE, SRM Institute of Science and Technology'],
            (object)['name' => 'Dr. Pawan Upadhyay', 'affiliation' => 'Professor-CSE, Jaypee Institute of Information Technology, Noida'],
            (object)['name' => 'Dr. Arun Prakash Agrawal', 'affiliation' => 'Professor-CSE, Bennett University, Greater Noida'],
            (object)['name' => 'Dr. Gaurav Agarwal', 'affiliation' => 'Professor-CSE, Galgotias University, Greater Noida'],
            (object)['name' => 'Dr. Analap Pathak', 'affiliation' => 'Associate Professor-CSE, KIET Group of Institutions, Ghaziabad'],
            (object)['name' => 'Dr. Jaswinder Singh', 'affiliation' => 'Associate Professor-CSE, IILM University, Greater Noida'],
            (object)['name' => 'Dr. Ashish Dixit', 'affiliation' => 'Associate Professor-CSE, AKGEC, Ghaziabad'],
            (object)['name' => 'Dr. Sachin Jain', 'affiliation' => 'Associate Professor-CSE, AKGEC, Ghaziabad'],
            (object)['name' => 'Dr. Kadambari Agarwal', 'affiliation' => 'Professor-CSE, ABESEC, Ghaziabad'],
            (object)['name' => 'Dr. Vivek Srivastava', 'affiliation' => 'Associate Professor-CSE, ABESEC, Ghaziabad'],
        ]);

        $keynoteSpeakersData = collect([
            (object)['name' => 'Prof. (Dr.) Abhay Bansal', 'affiliation' => 'Bennett University, Greater Noida'],
            (object)['name' => 'Prof. (Dr.) Ajay Rana', 'affiliation' => 'Amity University, Greater Noida'],
            (object)['name' => 'Prof. (Dr.) Arun Sharma', 'affiliation' => 'Indira Gandhi Delhi Technical University'],
            (object)['name' => 'Prof. (Dr.) Uma Shankar Pandey', 'affiliation' => 'Delhi University'],
            (object)['name' => 'Dr. Avadhesh Kumar Gupta', 'affiliation' => 'IILM University, Greater Noida'],
            (object)['name' => 'Dr. Sandeep Poddar', 'affiliation' => 'Lincoln University College, Malaysia'],
            (object)['name' => 'Prof. Kumud Saxena', 'affiliation' => 'Lloyd Institute of Engineering and Technology'],
            (object)['name' => 'Dr. Manoj Sharma', 'affiliation' => 'Bio-statistics Professional, California, USA'],
            (object)['name' => 'Dr. Ankit Vidyarthi', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
            (object)['name' => 'Mr. Saurabh Saxena', 'affiliation' => 'AwareBase Corp, Canada'],
        ]);

        // ACTIVE COMMITTEES
        $committees = collect([
            'Advisory Committee' => collect([
                (object)['name' => 'Dr. Sandeep Poddar', 'affiliation' => 'Lincoln University College, Malaysia'],
                (object)['name' => 'Dr. Manoj Sharma', 'affiliation' => 'Istatistics Professional, California, USA'],
                (object)['name' => 'Prof. (Dr.) Mirela Blaga', 'affiliation' => 'Gheorghe Asachi din Iasi, Romania'],
                (object)['name' => 'Mr. Saurabh Saxena', 'affiliation' => 'AwareBase Corp, Canada'],
                (object)['name' => 'Mr. Tara Shanker', 'affiliation' => 'Ministry of Electronics & Information Technology (MeitY), Govt. of India'],
                (object)['name' => 'Mr. Arvind Kumar', 'affiliation' => 'Senior Advisor at C-DAC, Govt. of India'],
                (object)['name' => 'Prof. (Dr.) Abhay Bansal', 'affiliation' => 'Bennett University, Greater Noida'],
                (object)['name' => 'Prof. (Dr.) Ajay Rana', 'affiliation' => 'Amity University, Greater Noida'],
                (object)['name' => 'Prof. (Dr.) K. P. Yadav', 'affiliation' => 'MATS University, Raipur'],
                (object)['name' => 'Prof. (Dr.) Anil K Ahlawat', 'affiliation' => 'IMS Engineering College'],
                (object)['name' => 'Mr. Saurabh Agrawal', 'affiliation' => 'Patron & Past Chairman, CSI'],
                (object)['name' => 'Mr. Gaurav Sharma', 'affiliation' => 'Director - STPI, Ministry of Electronics & IT, Govt. of India'],
                (object)['name' => 'Prof. (Dr.) Nanhay Singh', 'affiliation' => 'Netaji Subhas University of Technology, East Campus, Delhi'],
                (object)['name' => 'Prof. (Dr.) Uma Shankar Pandey', 'affiliation' => 'Delhi University'],
                (object)['name' => 'Prof. (Dr.) Syed Zeeshan Hussain', 'affiliation' => 'Jamia Millia Islamia'],
                (object)['name' => 'Prof. (Dr.) Adesh Kr. Pandey', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Prof. (Dr.) Arun Sharma', 'affiliation' => 'Indira Gandhi Delhi Technical University'],
                (object)['name' => 'Prof. (Dr.) Sunil Kr Pandey', 'affiliation' => 'I.T.S, Mohan Nagar, Ghaziabad'],
                (object)['name' => 'Prof. (Dr.) R. P. Mahapatra', 'affiliation' => 'SRM Institute of Science and Technology'],
                (object)['name' => 'Prof. (Dr.) Vineet Kumar Sharma', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Dr. Pawan Singh', 'affiliation' => 'Amity School of Engineering and Technology, Lucknow'],
                (object)['name' => 'Dr. Ankit Vidyarthi', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
                (object)['name' => 'Dr. Pawan Upadhyay', 'affiliation' => 'Jaypee Institute of Information Technology, Noida'],
                (object)['name' => 'Dr. Avadhesh Kumar Gupta', 'affiliation' => 'IILM University, Greater Noida'],
                (object)['name' => 'Dr. Bharat Bhushan Dua', 'affiliation' => 'Additional Director (Technical), (NIELIT) Delhi'],
                (object)['name' => 'Mr. S. K. Das', 'affiliation' => 'Cogniscient Business Solutions, NOIDA'],
                (object)['name' => 'Dr. S. K. Dubey', 'affiliation' => 'Amity University, NOIDA'],
                (object)['name' => 'Dr. Amit Singhal', 'affiliation' => 'RKGIT, Ghaziabad'],
                (object)['name' => 'Dr. Jitendra Singh', 'affiliation' => 'SRM Institute of Science and Technology'],
                (object)['name' => 'Dr. Arun Prakash Agrawal', 'affiliation' => 'Bennett University, Greater Noida'],
                (object)['name' => 'Dr. Birendra Kumar Sharma', 'affiliation' => 'Madan Mohan Malaviya University of Technology, Gorakhpur'],
                (object)['name' => 'Dr. Gaurav Agarwal', 'affiliation' => 'Galgotias University, Greater Noida'],
                (object)['name' => 'Mr. Arun Choudhary', 'affiliation' => 'HRIT University, Ghaziabad'],
                (object)['name' => 'Dr. Analp Pathak', 'affiliation' => 'KIET Group of Institutions, Ghaziabad'],
                (object)['name' => 'Dr. Jaswinder Singh', 'affiliation' => 'IILM University, Greater Noida'],
            ]),
            'Registration Committee' => collect([
                (object)['name' => 'Ms. Priya Tyagi', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Abhay Chaudhary', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Madan Gopal', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Inaugural and Lamp Lighting' => collect([
                (object)['name' => 'Ms. Divya Pachauri', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Priyanka Arora', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Anchoring Committee' => collect([
                (object)['name' => 'Mr. Partha Basu', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Meghna Tyagi', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Transportation, Accommodation & Hospitality' => collect([
                (object)['name' => 'Mr. Shashi Bhushan Bahuguna', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Neeraj Sharma', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Dharmendra Kumar', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Reception, Decoration & Stage Management' => collect([
                (object)['name' => 'Dr. Roopam Chauhan', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Sanjivani Sharma', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Technical Sessions Committee' => collect([
                (object)['name' => 'Mr. R. C. Yadaw', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Rishab Raj', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. Rajesh', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Divya Pachauri', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Ms. Priyanka Arora', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Finance & Audit Committee' => collect([
                (object)['name' => 'Mr. Atul Baijal', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. K. K. Dewan', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. A.P. Srivastava', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Sachin Bhatt', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Food Committee' => collect([
                (object)['name' => 'Mr. Saurabh Jain', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Saurabh Pathak', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Press Publicity & Media Management' => collect([
                (object)['name' => 'Mr. Sanjay Gupta', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Neeraj Sharma', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Videography & Photography Committee' => collect([
                (object)['name' => 'Mr. Akash Kumar', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Raju', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Website Management Committee' => collect([
                (object)['name' => 'Mr. Nitesh Kumar', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Shiva Chaudhary', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Certificate Distribution Committee' => collect([
                (object)['name' => 'Ms. Akansha Rajput', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Mohd Shahanawaz', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Rakesh Kumar', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Rohitash Kumar', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Students Volunteers', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Discipline Committee' => collect([
                (object)['name' => 'Dr. Rishabh Raj', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Sanjay Gupta', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Harendra Kumar Singh', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Yogesh Tiwari', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Purchase Committee' => collect([
                (object)['name' => 'Mr. K. K. Dewan', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Dr. A.P. Srivastava', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Rizvi', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
                (object)['name' => 'Mr. Praveen Kumar', 'affiliation' => 'NITRA Technical Campus, Ghaziabad'],
            ]),
            'Technical Program Committee' => $isLive ? $technicalProgramData : collect([
                (object)['name' => 'Details will be updated shortly', 'affiliation' => 'Coming Soon'],
            ]),
            'Our Eminent Keynote Speakers' => $isLive ? $keynoteSpeakersData : collect([
                (object)['name' => 'Details will be updated shortly', 'affiliation' => 'Coming Soon'],
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
