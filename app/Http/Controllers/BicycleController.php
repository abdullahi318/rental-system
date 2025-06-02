<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBicycleRequest;
use App\Http\Requests\UpdateBicycleRequest;
use App\Models\Bicycle;
use App\Models\Station;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bicycles = Bicycle::with('station')->latest()->get();
        
        return view('bicycles.index',  [
            'bicycles' => $bicycles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stations = Station::all();
        return view('bicycles.create', compact('stations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBicycleRequest $request)
    {
        $validated = $request->validated();
        Bicycle::create($validated);

        return redirect()->route('bicycles.index')->with('messaage','added successful')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicycle $bicycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bicycle $bicycle)
    {
        $stations = Station::all();
        return view('bicycles.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBicycleRequest $request, Bicycle $bicycle)
    {
        $stations = Station::all();

        return view('bicycles.edit', [
            'bicycle' => $bicycle,
            'stations' => $stations,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicycle $bicycle)
    {
        //
    }
}
