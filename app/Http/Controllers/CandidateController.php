<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateStoreRequest;
use App\Http\Requests\CandidateUpdateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $candidates = Candidate::all();

        return view('candidates.index', compact('candidate'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Candidate $candidate)
    {
        return view('candidate.show', compact('candidate'));
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
    public function update(CandidateUpdateRequest $request, Candidate $candidate)
    {
        $candidate->update($request->validated());

        return view('candidate.update', compact('candidate'));

        return redirect()->route('candidates.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Candidate $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Candidate $candidate)
    {
        $candidate->delete();
    }
}
