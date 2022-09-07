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
        $path = $this->uploadFile($request, 'image');
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

        $newPath = $this->uploadFile($request, 'image');

        $service->update($request->validated());
        $service->update([
            'image' => $newPath,
        ]);

        $this->deleteFile($oldPath);

        return redirect()->route('services.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Service $service)
    {
        $this->deleteFile($service->image);
        $service->delete();

        return redirect()->route('services.index');
    }

    public function deleteFile($path)
    {
        if ($path) {
            Storage::disk('public')->delete($path);
        }
    }

    public function uploadFile($request, $inputName)
    {
        $path = null;
        if ($request->hasFile($inputName)) {
            $path = Storage::disk('public')->put($request->file($inputName)->extension(), $request->file($inputName));
        };
        return $path;
    }
}
