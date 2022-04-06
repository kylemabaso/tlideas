<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    use HasFactory;

    protected $fillable = [ 'lat', 'lng', 'requisition_id' ];

    public function requisition()
    {
        return $this->belongsTo(Requisition::class);
    }
}
