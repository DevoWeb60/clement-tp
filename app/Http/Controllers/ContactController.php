<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use App\Models\Delivery;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Contact $message)
    {
        $message->update(['viewed' => 1]);

        return view('contact.show', compact('message'));
    }

    /**
     * @param \App\Http\Requests\ContactStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $request->merge(['delivery_id' => $this->checkDelivery($request->delivery_id)]);

        $contact = Contact::create($request->validated());
        $contact->update(['delivery_id' => $request->delivery_id]);

        return redirect()->route('contact');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Contact $message)
    {
        $message->delete();
        return redirect()->route('dashboard');
    }

    public function checkDelivery($code)
    {
        if ($code) {
            $delivery = Delivery::where('code', $code)->first();

            if ($delivery) {
                if ($delivery->active == 1) {
                    $code = $delivery->id;
                }
            }
        }
        if (!filter_var($code, FILTER_VALIDATE_INT)) {
            $code = null;
        }

        return strval($code);
    }
}
