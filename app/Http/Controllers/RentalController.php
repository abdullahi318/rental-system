<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRentalRequest;
use App\Http\Requests\UpdateRentalRequest;
use App\Models\Rental;
use App\Models\Student;
use App\Models\Station;
use App\Models\Bicycle;
use App\Enums\StatusEnum;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals  = Rental::with('student','station','bicycle')->latest()->get();
        $statuses = StatusEnum::cases();
        
        
        return view('rentals.index',[
            'rentals'       => $rentals,
            'statuses'      => $statuses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $stations = Station::all();
        $bicycles = Bicycle::all();
        $statuses = StatusEnum::cases();


        return view('rentals.create', compact('students','stations','bicycles','statuses',));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentalRequest $request)
    {

        // dd($request);
        // $validated = $request->validated([
        //     'status' => ['required', new Enum(StatusEnum::class)],
        //     // Other field

        // ]);
        $validated = $request->validated();

        dd($validated);

        Rental::create($validated);

        // $rental = Rental::create([
        //     'status' => StatusEnum::from($validated['status']),
        //     // Other field
        // ]);
        // dd($rental);

        return redirect()->route('rentals.index')->with('message', 'Added Successfull.')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentalRequest $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
