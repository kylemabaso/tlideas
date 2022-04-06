<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Waste extends Component
{
    public $manifestWaste = [];
    public $wasteTypes = [];

    public function mount() {
        $this->wasteTypes = \App\Models\WasteType::all();
        $this->manifestWaste = [
            [
                'waste_type_id' => '',
                'treatment' => '',
                'bin_location' => '',
                'bin_qty' => '',
                'bin_size' => '',
                'mass_kg' => '',
            ]
        ];
    }

    public function addWaste() {
        $this->manifestWaste[] = [
            'waste_type_id' => '',
            'treatment' => '',
            'bin_location' => '',
            'bin_qty' => '',
            'bin_size' => '',
            'mass_kg' => '',
        ];
    }

    public function removeWaste($index)
    {
        unset($this->manifestWaste[$index]);
        $this->manifestWaste = array_values($this->manifestWaste);
    }

    public function render()
    {
//        info($this->manifestWaste);
        return view('livewire.waste');
    }
}
