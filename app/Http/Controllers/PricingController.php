<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePricingRequest;
use App\Http\Requests\UpdatePricingRequest;
use App\Models\Pricing;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = Pricing::all();

        return view('pricings.index', [
            'pricings' => $pricings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pricings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePricingRequest $request)
    {
        $validated = $request->validated();
        Pricing::create($validated);

        return redirect()->route('pricings.index')->with('message', 'Added successfull. ')->withInput();


    }

    /**
     * Display the specified resource.
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        return view('pricings.edit', [
            'pricing' => $pricing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePricingRequest $request, Pricing $pricing)
    {
       $pricing->update($request->validated());

       return redirect()->route('pricings.index')->with('message', 'Updated successfull. ')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();

        return redirect()->route('pricings.index')->with('message','Pricing deleted successful')->withInput();
    }
}
