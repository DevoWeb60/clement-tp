<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


        return view('contact');
    }

    public function jobOffer()
    {


        return view('job-offer');
    }

    public function offer()
    {
        $google = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.3298189946286!2d2.1953062160685444!3d49.421578279346654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7abd9e3f24f87%3A0x94db7b689c205152!2s45b%20Rue%20Saint-Germain%2C%2060510%20Laversines!5e0!3m2!1sfr!2sfr!4v1661761015931!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $googleLink = explode("src=\"", $google);
        $googleLink = explode("\"", $googleLink[1])[0];
        return view('offer', ["googleLink" => $googleLink]);
    }
}
