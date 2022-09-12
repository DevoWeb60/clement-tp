<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $service = false;


        return view('services.index', compact('service'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Service $service)
    {
        return view('services.index', compact('service'));
    }

    /**
     * @param \App\Http\Requests\ServiceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStoreRequest $request)
    {
        $path = Controller::uploadFile($request, 'image');
        $service = Service::create($request->validated());
        $service->update([
            'image' => $path,
        ]);

        return redirect()->route('services.index');
    }

    /**
     * @param \App\Http\Requests\ServiceUpdateRequest $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, Service $service)
    {

        $oldPath = $service->image;

        $newPath = Controller::uploadFile($request, 'image', $oldPath);

        $service->update($request->validated());
        $service->update([
            'image' => $newPath,
        ]);

        return redirect()->route('services.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Service $service)
    {
        Controller::deleteFile($service->image);
        $service->delete();

        return redirect()->route('services.index');
    }
}
