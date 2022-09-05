<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use App\Models\Candidate;
use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function projects()
    {
        return view('projects');
    }
    public function contact()
    {
        $siteInfo = SiteInfo::first();
        $googleIframe = $this->getURLFromIframe($siteInfo->iframe_map);

        return view('contact', compact('siteInfo', 'googleIframe'));
    }

    public function jobOffer()
    {
        $jobOffers = JobOffer::where('active', true)->orderBy('id', 'DESC')->get();

        return view('job-offer', compact('jobOffers'));
    }

    public function offer(Request $request, $id)
    {
        $offer = JobOffer::find($id);
        $googleLink = $this->getURLFromIframe($offer->iframe_map);
        $skills = explode(',', $offer->skills);
        return view('offer', compact('offer', 'googleLink', 'skills'));
    }

    public function dashboard()
    {
        $user = Auth::user();

        return view('dashboard.home', compact('user'));
    }

    public function getURLFromIframe($iframe)
    {
        $googleLink = explode("src=\"", $iframe);
        $googleLink = explode("\"", $googleLink[1])[0];
        return $googleLink;
    }
}
