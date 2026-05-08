<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Committee;
use App\Models\ImportantDate;
use App\Models\Page;
use App\Models\Marquee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $marqueeCount = Marquee::count();
        $viewCount = Setting::where('key', 'view_count')->first();
        $committeeCount = Committee::count();
        $datesCount = ImportantDate::count();
        $pagesCount = Page::count();

        return view('admin.dashboard', compact('viewCount', 'committeeCount', 'datesCount', 'pagesCount', 'marqueeCount'));
    }

    public function settings()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->with('success', 'Settings updated successfully!');
    }

    public function marquees()
    {
        $marquees = Marquee::orderBy('order')->get();
        return view('admin.marquees.index', compact('marquees'));
    }

    public function storeMarquee(Request $request)
    {
        Marquee::create($request->all());
        return back()->with('success', 'Marquee added successfully!');
    }

    public function editMarquee($id)
    {
        $marquee = Marquee::find($id);
        return view('admin.marquees.edit', compact('marquee'));
    }

    public function updateMarquee(Request $request, $id)
    {
        Marquee::find($id)->update($request->all());
        return redirect()->route('admin.marquees')->with('success', 'Marquee updated successfully!');
    }

    public function deleteMarquee($id)
    {
        Marquee::find($id)->delete();
        return back()->with('success', 'Marquee deleted successfully!');
    }

    public function committee()
    {
        $committees = Committee::orderBy('order')->get()->groupBy('category');
        return view('admin.committee.index', compact('committees'));
    }

    public function createCommittee()
    {
        return view('admin.committee.create');
    }

    public function storeCommittee(Request $request)
    {
        Committee::create($request->all());
        return redirect()->route('admin.committee')->with('success', 'Member added successfully!');
    }

    public function editCommittee($id)
    {
        $member = Committee::find($id);
        return view('admin.committee.edit', compact('member'));
    }

    public function updateCommittee(Request $request, $id)
    {
        Committee::find($id)->update($request->all());
        return redirect()->route('admin.committee')->with('success', 'Member updated successfully!');
    }

    public function deleteCommittee($id)
    {
        Committee::find($id)->delete();
        return back()->with('success', 'Member deleted successfully!');
    }

    public function dates()
    {
        $dates = ImportantDate::orderBy('order')->get();
        return view('admin.dates.index', compact('dates'));
    }

    public function storeDate(Request $request)
    {
        ImportantDate::create($request->all());
        return back()->with('success', 'Date added successfully!');
    }

    public function editDate($id)
    {
        $date = ImportantDate::find($id);
        return view('admin.dates.edit', compact('date'));
    }

    public function updateDate(Request $request, $id)
    {
        ImportantDate::find($id)->update($request->all());
        return redirect()->route('admin.dates')->with('success', 'Date updated successfully!');
    }

    public function deleteDate($id)
    {
        ImportantDate::find($id)->delete();
        return back()->with('success', 'Date deleted successfully!');
    }

    public function pages()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function updatePage(Request $request, $id)
    {
        $page = Page::find($id);
        $page->update($request->all());
        return back()->with('success', 'Page updated successfully!');
    }
}
