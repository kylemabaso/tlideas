<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalTonnage = DB::table('manifest_waste')
            ->where('id', Auth::id())
            ->avg('price');    }



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
