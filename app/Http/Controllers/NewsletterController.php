<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterStoreRequest;
use App\Http\Requests\NewsletterUpdateRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $newsletters = Newsletter::all();

        return view('newsletters.index', compact('newsletters'));
    }

    /**
     * @param \App\Http\Requests\NewsletterStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterStoreRequest $request)
    {
        $newsletter = Newsletter::create($request->validated());

        return redirect()->route('newsletters.index');
    }

    /**
     * @param \App\Http\Requests\NewsletterUpdateRequest $request
     * @param \App\Models\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(NewsletterUpdateRequest $request, Newsletter $newsletter)
    {
        $newsletter->update($request->validated());

        return view('newsletters.update', compact('newsletter'));

        return redirect()->route('newsletters.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Newsletter $newsletter)
    {
        $newsletter->delete();
    }
}
