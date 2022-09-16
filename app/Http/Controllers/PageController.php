<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use App\Models\SiteInfo;
use App\Models\Candidate;
use App\Models\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $presentations = PageContent::where('page_name', 'home')->where('section_name', 'home-presentation')->get();

        return view('home', compact('presentations'));
    }

    public function about()
    {
        $mainText = PageContent::where('page_name', 'about')->where('section_name', 'about-main')->first();
        $aboutContents = PageContent::where('page_name', 'about')->where('section_name', 'about-content')->get();
        return view('about', compact('mainText', 'aboutContents'));
    }
    public function services()
    {
        return view('services');
    }
    public function projects()
    {
        $projects = PageContent::where('page_name', 'projects')->where('section_name', 'projects-galery')->get();

        return view('projects', compact('projects'));
    }
    public function contact()
    {
        $siteInfo = SiteInfo::first();

        return view('contact', compact('siteInfo'));
    }

    public function jobOffer()
    {
        $jobOffers = JobOffer::where('active', true)->orderBy('id', 'DESC')->get();

        return view('job-offer', compact('jobOffers'));
    }

    public function offer(Request $request, $id)
    {
        $offer = JobOffer::find($id);
        $skills = explode(',', $offer->skills);
        return view('offer', compact('offer', 'skills'));
    }

    public function dashboard()
    {
        $user = Auth::user();

        return view('dashboard.home', compact('user'));
    }

    public function privacy()
    {
        return view('privacy-policy');
    }
}
