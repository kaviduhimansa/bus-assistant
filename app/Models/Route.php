<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    // Add the columns from your create_routes_table migration here
    protected $fillable = [
        'route_name', 
        'start_location', 
        'end_location'
    ];

    // Define the Many-to-Many relationship to BusStops
    public function stops()
    {
        return $this->belongsToMany(BusStop::class, 'route_stops', 'route_id', 'bus_stop_id')
                    ->withTimestamps();
    }
}