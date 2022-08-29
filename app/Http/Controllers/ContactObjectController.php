<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactObjectStoreRequest;
use App\Http\Requests\ContactObjectUpdateRequest;
use App\Models\ContactObject;
use Illuminate\Http\Request;

class ContactObjectController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contactObjects = ContactObject::all();

        return view('contact-objects.index', compact('contactObject'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('contact-objects.create');
    }

    /**
     * @param \App\Http\Requests\ContactObjectStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactObjectStoreRequest $request)
    {
        $contactObject = ContactObject::create($request->validated());

        return redirect()->route('contact-objects.index');
    }

    /**
     * @param \App\Http\Requests\ContactObjectUpdateRequest $request
     * @param \App\Models\ContactObject $contactObject
     * @return \Illuminate\Http\Response
     */
    public function update(ContactObjectUpdateRequest $request, ContactObject $contactObject)
    {
        $contactObject->update($request->validated());

        return view('contact-objects.update', compact('contactObject'));

        return redirect()->route('contact-objects.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactObject $contactObject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ContactObject $contactObject)
    {
        $contactObject->delete();
    }
}
