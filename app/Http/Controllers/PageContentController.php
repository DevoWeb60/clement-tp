<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageContentStoreRequest;
use App\Http\Requests\PageContentUpdateRequest;
use App\Models\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageContents = PageContent::all();

        return view('page-content.index', compact('pageContents'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('page-content.create');
    }

    /**
     * @param \App\Http\Requests\PageContentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageContentStoreRequest $request)
    {
        $pageContent = PageContent::create($request->validated());


        return redirect()->route('page-content.index');
    }

    /**
     * @param \App\Http\Requests\PageContentUpdateRequest $request
     * @param \App\Models\PageContent $pageContent
     * @return \Illuminate\Http\Response
     */
    public function update(PageContentUpdateRequest $request, PageContent $pageContent)
    {
        $pageContent->update($request->validated());

        return view('page-content.update', compact('pageContent'));

        return redirect()->route('page-content.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PageContent $pageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PageContent $pageContent)
    {
        $pageContent->delete();
    }
}
