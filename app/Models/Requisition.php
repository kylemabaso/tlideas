<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable = [
        'requisition_number',
        'requisition_status_id',
        'pick_up_date',
        'subject',
        'details',
        'user_id',
        'driver_id',
        'manifest_id'
    ];

    protected $dates = ['created_at'];


    public function requisition_status()
    {
        return $this->belongsTo(RequisitionStatus::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function manifest()
    {
        return $this->hasOne(Manifest::class);
    }
    public function geolocations()
    {
        return $this->hasMany(Geolocation::class);
    }
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
