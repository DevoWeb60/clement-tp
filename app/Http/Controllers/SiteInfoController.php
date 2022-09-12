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
        $siteInfo = SiteInfo::first();

        return view('site-info.index', compact('siteInfo'));
    }

    /**
     * @param \App\Http\Requests\SiteInfoUpdateRequest $request
     * @param \App\Models\SiteInfo $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(SiteInfoUpdateRequest $request, SiteInfo $general)
    {
        $oldPathLogo = $general->logo;
        $oldPathFavicon = $general->favicon;

        $logoPath = Controller::uploadFile($request, 'logo', $oldPathLogo);
        $faviconPath = Controller::uploadFile($request, 'favicon', $oldPathFavicon);

        $general->update($request->validated());
        $general->update([
            'logo' => $logoPath ? $logoPath : $oldPathLogo,
            'favicon' => $faviconPath ? $faviconPath : $oldPathFavicon,
        ]);

        return redirect()->route('general.index');
    }
}
