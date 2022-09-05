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
        $id = "false";
        return view('deliveries.index', compact('id'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Delivery $coupon)
    {
        $id = $coupon->id;
        return view('deliveries.index', compact('coupon', 'id'));
    }

    /**
     * @param \App\Http\Requests\DeliveryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeliveryStoreRequest $request)
    {
        $active = $request->active;
        $delivery = Delivery::create($request->validated());
        $delivery->update(['active' => $active ? true : false]);

        return redirect()->route('coupons.index');
    }

    /**
     * @param \App\Http\Requests\DeliveryUpdateRequest $request
     * @param \App\Models\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(DeliveryUpdateRequest $request, Delivery $coupon)
    {
        $active = $request->active;
        $coupon->update($request->validated());
        $coupon->update(['active' => $active ? true : false]);

        return redirect()->route('coupons.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Delivery $coupon)
    {
        $coupon->delete();

        return redirect()->route('coupons.index');
    }
}
