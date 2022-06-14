<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Cruise;
use App\Models\Destination;
use App\Models\Route;
use DateTimeZone;
use Illuminate\Http\Request;

class CruiseController extends Controller
{

    public function index(){
        $currentDate = date('Y-m-d');
        $cruises = Cruise::where('departureDate','>=',$currentDate)->get();
        $routes = Route::all();
        $buses = Bus::all();

        return view('add-delete.cruise',compact('cruises','routes','buses'));
    }


    public function destroy($id){
        $cruise = Cruise::find($id)->delete();

        return redirect()->route('admin.cruises');
    }
}
