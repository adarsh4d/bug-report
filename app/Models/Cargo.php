<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'name',
    ];

    protected static function booted()
    {
        static::observe(\App\Observers\CargoObserver::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
