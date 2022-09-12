<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function deleteFile($path)
    {
        if ($path) {
            Storage::disk('public')->delete($path);
        }
    }

    public function uploadFile($request, $inputName, $deleteOldFile = false)
    {
        $path = null;
        if ($request->hasFile($inputName)) {
            $path = Storage::disk('public')->put($request->file($inputName)->extension(), $request->file($inputName));

            if ($deleteOldFile) {
                $this->deleteFile($deleteOldFile);
            }
        };

        return $path;
    }
}
