<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $manifestWaste = [];
    public $allWaste = [];

    public function mount() {
        $this->allWaste = \App\Models\ManifestItem::all();
        $this->manifestWaste = [
            [
                'waste_id' => '',
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
            'waste_id' => '',
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
