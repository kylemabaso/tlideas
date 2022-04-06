<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_in',
        'time_out',
        'operator_in',
        'operator_out',
        'notes',
        'requisition_id',
        'user_id',
    ];

    public function manifest_items()
    {
        return $this->hasMany(ManifestItem::class);
    }
    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
    public function requisition()
    {
        return $this->belongsTo(Requisition::class);
    }
    public function driver()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}


