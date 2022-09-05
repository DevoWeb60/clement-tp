<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateStoreRequest;
use App\Http\Requests\CandidateUpdateRequest;
use App\Models\Candidate;
use App\Models\CandidateState;
use App\Models\JobOffer;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $candidates = Candidate::where('job_offer_id', $request->id)->get();
        $jobOffer = JobOffer::where('id', $request->id)->first();


        return view('candidates.index', compact('candidates', 'jobOffer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Candidate $candidature)
    {
        $states = CandidateState::all();

        return view('candidates.show', compact('candidature', 'states'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('candidates.create');
    }

    /**
     * @param \App\Http\Requests\CandidateStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateStoreRequest $request)
    {
        $candidate = Candidate::create($request->validated());

        return redirect()->route('candidates.index');
    }

    /**
     * @param \App\Http\Requests\CandidateUpdateRequest $request
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidature)
    {
        if ($request->states_id) {
            $candidature->update([
                'states_id' => $request->states_id,
            ]);
        }

        return redirect()->route('candidature.show', $candidature);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Candidate $candidature)
    {
        $offerId = $candidature->job_offer_id;
        $candidature->delete();
        return redirect()->route('candidature.index', ['id' => $offerId]);
    }
}
