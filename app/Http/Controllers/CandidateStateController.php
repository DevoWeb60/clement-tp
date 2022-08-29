<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateStateStoreRequest;
use App\Http\Requests\CandidateStateUpdateRequest;
use App\Models\CandidateState;
use Illuminate\Http\Request;

class CandidateStateController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $candidateStates = CandidateState::all();

        return view('candidate-state.index', compact('candidateStates'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('candidate-state.create');
    }

    /**
     * @param \App\Http\Requests\CandidateStateStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateStateStoreRequest $request)
    {
        $candidateState = CandidateState::create($request->validated());

        return redirect()->route('candidate-state.index');
    }

    /**
     * @param \App\Http\Requests\CandidateStateUpdateRequest $request
     * @param \App\Models\CandidateState $candidateState
     * @return \Illuminate\Http\Response
     */
    public function update(CandidateStateUpdateRequest $request, CandidateState $candidateState)
    {
        $candidateState->update($request->validated());

        return view('candidate-state.update', compact('candidateState'));

        return redirect()->route('candidate-state.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CandidateState $candidateState
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CandidateState $candidateState)
    {
        $candidateState->delete();
    }
}
