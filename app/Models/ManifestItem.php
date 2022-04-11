<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManifestItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'manifest_id',
        'waste_type_id',
        'treatment',
        'bin_location',
        'bin_qty',
        'bin_size',
        'mass_kg'
    ];

    public function waste_types()
    {
        return $this->belongsTo(WasteType::class);
    }

    public function manifest()
    {
        return $this->belongsTo(Manifest::class, 'manifest_id');
    }
}
