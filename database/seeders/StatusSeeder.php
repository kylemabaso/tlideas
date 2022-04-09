<?php

namespace Database\Seeders;

use App\Models\RequisitionStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequisitionStatus::create(['title' => 'Awaiting Approval']);
        RequisitionStatus::create(['title' => 'Assigned to Driver']);
        RequisitionStatus::create(['title' => 'Waste Collected']);
        RequisitionStatus::create(['title' => 'En Route to Sorting']);
        RequisitionStatus::create(['title' => 'En Route to Landfill']);
        RequisitionStatus::create(['title' => 'Sorting Facility']);
        RequisitionStatus::create(['title' => 'Handed Over']);
        RequisitionStatus::create(['title' => 'Waste Disposed']);
    }
}
