<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryStoreRequest;
use App\Http\Requests\DeliveryUpdateRequest;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $deliveries = Delivery::all();

        return view('deliveries.index', compact('deliveries'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('deliveries.create');
    }

    /**
     * @param \App\Http\Requests\DeliveryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeliveryStoreRequest $request)
    {
        $delivery = Delivery::create($request->validated());

        return redirect()->route('deliveries.index');
    }

    /**
     * @param \App\Http\Requests\DeliveryUpdateRequest $request
     * @param \App\Models\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(DeliveryUpdateRequest $request, Delivery $delivery)
    {
        $delivery->update($request->validated());

        return view('deliveries.update', compact('delivery'));

        return redirect()->route('deliveries.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Delivery $delivery)
    {
        $delivery->delete();
    }
}
