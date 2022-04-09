<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Manifest;
use App\Models\ManifestItem;
use App\Models\Requisition;
use App\Models\WasteType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\TLMailer;

class ManifestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('system.manifests.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Requisition $requisition)
    {
        $destinations = Destination::all();
        return view('system.manifests.create', compact('requisition', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manifest = Manifest::create([
            'requisition_id' => $request->requisition_id,
            'user_id' => $request->user_id,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
            'operator_in' => $request->operator_in,
            'operator_out' => $request->operator_out,
            'destination_id' => $request->destination_id,
            'disposal_date' => $request->disposal_date,
        ]);

        dd($manifest);

        foreach ($request->manifestWaste as $waste) {
            $manifestItems = ManifestItem::create(
                [
                    'manifest_id' => $manifest->id,
                    'waste_type_id' => $waste['waste_type_id'],
                    'treatment' => $waste['treatment'],
                    'bin_location' => $waste['bin_location'],
                    'bin_qty' => $waste['bin_qty'],
                    'bin_size' => $waste['bin_size'],
                    'mass_kg' => $waste['mass_kg']
                ]
            );
        }

        return redirect('requisitions');
    }

    public function assign(Request $request)
    {
        $driver = User::where('id', $request->driver_id)->first();
        $driver_email = $driver->email;

        $requisition = Requisition::where('requisition_number', $request->requisition_number)->first();
        $requisition->update(['driver_id' => $driver->id]);

        $client = User::where('id', $requisition->user_id)->first();

        $data = ['message' => 'successfully created'];
        response()->json($data);

        return $this->sendmail($driver_email, $client, $requisition);
    }

    protected function sendmail($mail, $client, $requisition)
    {
        $details = [
            'title' => 'Your new ticket '.$requisition->requisition_number,
            'body' => 'Client '.$client->firstname.' '.$client->lastname.' asked you to '.$requisition->details.' by '.$requisition->pick_up_date
        ];
        // $details = [
        //     'title' => 'Your new ticket',
        //     'body' => 'you have to go and pick up'
        // ];
        \Mail::to($mail)->send(new TLMailer($details));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manifest  $manifest
     * @return \Illuminate\Http\Response
     */
    public function show(Manifest $manifest)
    {
        return view('system.manifests.show', compact('manifest'))->with(['manifest_items', 'wasteTypes']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manifest  $manifest
     * @return \Illuminate\Http\Response
     */
    public function edit(Manifest $manifest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manifest  $manifest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manifest $manifest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manifest  $manifest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manifest $manifest)
    {
        //
    }

}
