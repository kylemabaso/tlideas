<?php

namespace App\Http\Controllers;

use App\Mail\AssignedRequisition;
use App\Models\Client;
use App\Models\Geolocation;
use App\Models\Manifest;
use App\Models\Requisition;
use App\Models\RequisitionStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitions = Requisition::with(['requisition_status', 'user', 'geolocations'])->get();

        return view('system.requisitions.index', compact('requisitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.requisitions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requisitionNumber = random_int(100000, 999999);

        $request->validate([
            'subject' => ['required', 'string', 'max:100'],
            'details' => ['max:255'],
            'pick_up_date' => ['required', 'string', 'max:20'],

        ]);

        $requisition = Requisition::create([
            'subject' => $request->subject,
            'details' => $request->details,
            'pick_up_date' => $request->pick_up_date,
            'requisition_number' => $requisitionNumber,
            'user_id' => Auth::id(),
            'requisition_status_id' => 1
        ]);

        return redirect('requisitions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return \Illuminate\Http\Response
     */
    public function show(Requisition $requisition)
    {
        $drivers = User::role('driver')->get();
        $requisition_statuses = RequisitionStatus::all();

        return view('system.requisitions.show', [
            'requisition' => $requisition,
            'drivers' => $drivers,
            'requisition_statuses' => $requisition_statuses,
        ])->with(['user', 'manifest']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return \Illuminate\Http\Response
     */
    public function edit(Requisition $requisition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requisition  $requisition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisition $requisition)
    {
        // Get all users
        $users = User::all();

        $attributes = request()->validate([
            'requisition_status_id' => Rule::exists('requisition_statuses', 'id'),
            'driver_id' => Rule::exists('users', 'id')
        ]);

        $requisition->update($attributes);

        $driver = User::find($attributes['driver_id']);

//        dd($driver);

        Mail::to($driver)->send(new AssignedRequisition($attributes));

        return redirect('requisitions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requisition  $requisition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requisition $requisition)
    {
        //
    }
}
