<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusStop extends Model
{
    // Add the columns from your create_bus_stops_table migration here
    protected $fillable = [
        'stop_name', 
        'latitude', 
        'longitude'
    ];

    // Define the Many-to-Many relationship back to Routes
    public function routes()
    {
        return $this->belongsToMany(Route::class, 'route_stops', 'bus_stop_id', 'route_id')
                    ->withTimestamps();
    }
}