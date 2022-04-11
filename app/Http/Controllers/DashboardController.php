<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Manifest;
use App\Models\ManifestItem;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitions = Requisition::orderBy('pick_up_date', 'desc')->take(5)->get();
        $manifests = Manifest::orderBy('created_at', 'desc')->take(5)->get();
        $client = Auth::user()->client_id;

        $client_req = Requisition::where('client_id', '=', $client)
            ->with('manifest')
            ->orderBy('pick_up_date', 'desc')
            ->take(5)
            ->get();

        $month = date('m');

        $totalTonnage = ManifestItem::latest()
        ->whereMonth('created_at', $month)
        ->sum('mass_kg');

        return view('system.dashboard', compact(
            'requisitions', 'manifests', 'totalTonnage',  'client_req'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboardController
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboardController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboardController
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboardController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboardController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboardController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboardController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboardController)
    {
        //
    }
}
