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

        return view('job-offers.index', compact('jobOffer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('job-offers.create');
    }

    /**
     * @param \App\Http\Requests\JobOfferStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobOfferStoreRequest $request)
    {
        $jobOffer = JobOffer::create($request->validated());

        return redirect()->route('job-offers.index');
    }

    /**
     * @param \App\Http\Requests\JobOfferUpdateRequest $request
     * @param \App\Models\JobOffer $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function update(JobOfferUpdateRequest $request, JobOffer $jobOffer)
    {
        $jobOffer->update($request->validated());

        return view('job-offers.update', compact('jobOffer'));

        return redirect()->route('job-offers.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobOffer $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, JobOffer $jobOffer)
    {
        $jobOffer->delete();
    }
}
