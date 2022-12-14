<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'number',
        'capacity',
        'type',
    ];

    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
