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
        $objet = false;

        return view('contact-objects.index', compact('objet'));
    }

    public function edit(Request $request, ContactObject $objet)
    {
        return view('contact-objects.index', compact('objet'));
    }

    /**
     * @param \App\Http\Requests\ContactObjectStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactObjectStoreRequest $request)
    {
        $contactObject = ContactObject::create($request->validated());

        return redirect()->route('objets.index');
    }

    /**
     * @param \App\Http\Requests\ContactObjectUpdateRequest $request
     * @param \App\Models\ContactObject $contactObject
     * @return \Illuminate\Http\Response
     */
    public function update(ContactObjectUpdateRequest $request, ContactObject $objet)
    {
        $objet->update($request->validated());

        return redirect()->route('objets.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactObject $contactObject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ContactObject $objet)
    {
        $objet->delete();
        return redirect()->route('objets.index');
    }
}
