<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route; // ⚠️ CRITICAL: Make sure this points to your Model!

class RouteController extends Controller
{
    public function index()
    {
        // Fetch all routes from the database
        $busRoutes = Route::all();

        // Send the data to a view file (we will build this view in the next step)
        return view('admin.routes.index', compact('busRoutes'));
    }
}