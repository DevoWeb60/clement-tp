<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteInfoStoreRequest;
use App\Http\Requests\SiteInfoUpdateRequest;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siteInfos = SiteInfo::all();

        return view('site-info.index', compact('siteInfo'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('site-infos.create');
    }

    /**
     * @param \App\Http\Requests\SiteInfoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteInfoStoreRequest $request)
    {
        $siteInfo = SiteInfo::create($request->validated());

        return redirect()->route('site-infos.index');
    }

    /**
     * @param \App\Http\Requests\SiteInfoUpdateRequest $request
     * @param \App\Models\SiteInfo $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(SiteInfoUpdateRequest $request, SiteInfo $siteInfo)
    {
        $siteInfo->update($request->validated());

        return view('site-infos.update', compact('siteInfo'));

        return redirect()->route('site-infos.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SiteInfo $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SiteInfo $siteInfo)
    {
        $siteInfo->delete();
    }
}
