<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RouteStop extends Pivot
{
    // Explicitly define the pivot table name
    protected $table = 'route_stops';

    // If you added extra columns in your migration (like stop_order), add them here
    // protected $fillable = ['route_id', 'bus_stop_id', 'stop_order'];
}