<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Committee;
use App\Models\ImportantDate;
use App\Models\Marquee;
use App\Models\Page;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    private function getCommonData()
    {
        return [
            'marquees' => Marquee::where('is_active', true)->orderBy('order')->get(),
            'settings' => Setting::all()->pluck('value', 'key'),
            'pages' => Page::all(),
        ];
    }

    public function home()
    {
        // Increment view count
        $count = Setting::where('key', 'view_count')->first();
        if ($count) {
            $currentValue = is_numeric($count->value) ? (int)$count->value : 0;
            $count->update(['value' => $currentValue + 1]);
        }

        $dates = ImportantDate::orderBy('order')->get();
        return view('pages.home', array_merge($this->getCommonData(), ['dates' => $dates]));
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->first();
        return view('pages.about', array_merge($this->getCommonData(), ['page' => $page]));
    }

    public function committee()
    {
        $committees = Committee::orderBy('order')->get()->groupBy('category');
        $page = Page::where('slug', 'committee')->first();
        return view('pages.committee', array_merge($this->getCommonData(), [
            'committees' => $committees,
            'page' => $page
        ]));
    }

    public function callForPaper()
    {
        $page = Page::where('slug', 'call-for-paper')->first();
        return view('pages.call-for-paper', array_merge($this->getCommonData(), ['page' => $page]));
    }

    public function paperSubmission()
    {
        $page = Page::where('slug', 'paper-submission')->first();
        return view('pages.paper-submission', array_merge($this->getCommonData(), ['page' => $page]));
    }

    public function registration()
    {
        $dates = ImportantDate::orderBy('order')->get();
        $page = Page::where('slug', 'registration')->first();
        return view('pages.registration', array_merge($this->getCommonData(), [
            'dates' => $dates,
            'page' => $page
        ]));
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->first();
        return view('pages.contact', array_merge($this->getCommonData(), ['page' => $page]));
    }
}
