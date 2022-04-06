<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Geolocation;
use Illuminate\Http\Request;

class DriverUpdateController extends Controller
{
    /**
     * Update the requisition status
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requisition  $requisition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisition $requisition)
    {
        $request->validate([
            'requisition_status_id'=>'required',
        ]);

        try{

            $requisition->fill($request->post())->update();

            return response()->json([
                'message'=>'Requisition Status Updated Successfully!!'
            ]);

        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something went wrong while updating a product!!'
            ],500);
        }

        $geolocation = Geolocation::create([
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        $requisition->geolocation()->attach($geolocation);
    }
}
