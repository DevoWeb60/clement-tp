<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\CandidateState;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CandidateStoreRequest;
use App\Http\Requests\CandidateUpdateRequest;

class CandidateController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            $candidates = Candidate::where('job_offer_id', $request->id)->get();
            $jobOffer = JobOffer::where('id', $request->id)->first();
        } else {
            $candidates = Candidate::all();
            $jobOffer = null;
        }
        return view('candidates.index', compact('candidates', 'jobOffer'));
    }

    public function show(Request $request, Candidate $candidature)
    {
        $states = CandidateState::all();

        return view('candidates.show', compact('candidature', 'states'));
    }

    /**
     * @param \App\Http\Requests\CandidateStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateStoreRequest $request)
    {
        $path = Controller::uploadFile($request, 'file');
        $candidate = Candidate::create($request->validated());
        $candidate->update([
            'file' => $path,
        ]);

        return redirect()->route('jobOffer');
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
        Controller::deleteFile($candidature->file);
        $candidature->delete();
        return redirect()->route('candidature.index', ['id' => $offerId]);
    }
}
