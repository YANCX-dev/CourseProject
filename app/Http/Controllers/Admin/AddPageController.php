<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Destination;
use App\Models\Driver;
use App\Models\Mark;
use App\Models\Route;
use Illuminate\Http\Request;

class AddPageController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $routes = Route::all();
        $buses = Bus::all();
        $drivers = Driver::all();
        $marks = Mark::all();

        return view('admin.add', compact('destinations', 'routes', 'buses', 'drivers', 'marks' ));
    }


}
