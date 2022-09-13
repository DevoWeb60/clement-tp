<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobOfferStoreRequest;
use App\Http\Requests\JobOfferUpdateRequest;
use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobOffers = JobOffer::all();
        foreach ($jobOffers as $jobOffer) {
            $jobOffer->skills = explode(',', $jobOffer->skills);
        }
        return view('job-offers.index', compact('jobOffers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jobOffer = false;

        return view('job-offers.create', compact('jobOffer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, JobOffer $offre)
    {
        $jobOffer = $offre;

        return view('job-offers.create', compact('jobOffer'));
    }

    /**
     * @param \App\Http\Requests\JobOfferStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobOfferStoreRequest $request)
    {
        $jobOffer = JobOffer::create($request->validated());
        $jobOffer->update([
            'active' => $request->active ? true : false,
        ]);

        return redirect()->route('offres.index');
    }

    /**
     * @param \App\Http\Requests\JobOfferUpdateRequest $request
     * @param \App\Models\JobOffer $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function update(JobOfferUpdateRequest $request, JobOffer $offre)
    {
        $offre->update($request->validated());
        $offre->update([
            'active' => $request->active ? true : false,
        ]);

        return redirect()->route('offres.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobOffer $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, JobOffer $offre)
    {
        $offre->delete();

        return redirect()->route('offres.index');
    }
}
