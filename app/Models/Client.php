<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo',
        'address',
        'phone',
        'email',
        'reg_number',
        'tax_number',
    ];

    public function requisitions()
    {
        return $this->hasMany(Requisition::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
