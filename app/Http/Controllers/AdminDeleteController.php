<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Cruise;
use App\Models\Destination;
use App\Models\Driver;
use App\Models\Mark;
use App\Models\News;
use App\Models\Page;
use App\Models\Route;
use Illuminate\Http\Request;

class AdminDeleteController extends Controller
{
    public function index(){

        $destinations = Destination::all();
        $routes = Route::all();
        $cruises = Cruise::all();

        $drivers = Driver::all();
        $marks = Mark::all();
        $buses = Bus::all();
        $pages = Page::all();
        $news = News::all();


        return view('admin.add-delete', compact('destinations','routes', 'cruises', 'drivers','marks','buses','pages', 'news'));
    }
}
