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
        $newsletters = Newsletter::orderBy('id', 'DESC')->get();

        return view('newsletters.index', compact('newsletters'));
    }

    /**
     * @param \App\Http\Requests\NewsletterStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterStoreRequest $request)
    {
        $newsletter = Newsletter::create($request->validated());
        return redirect()->route($request->route);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('newsletters.index');
    }

    public function exportToCSV()
    {
        $newsletters = Newsletter::all();
        $filename = "newsletters.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('id', 'email', 'created_at'));

        foreach ($newsletters as $newsletter) {
            fputcsv($handle, array($newsletter->id, $newsletter->email, $newsletter->created_at));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download($filename, 'newsletters.csv', $headers);
    }
}
