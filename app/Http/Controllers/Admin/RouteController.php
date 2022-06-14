<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function index()
    {
        $destinations = Destination::all();
        $routes = Route::all();

        return view('add-delete.route',compact('destinations','routes'));
    }


    public function store(Request $request)
    {
        $routeExist = Route::where('destination_id', $request->destination_id)->where('travelTime', $request->travelTime)->get();
        $departurePoint = "Челябинск";

        if (count($routeExist) > 0) {

            return back()->withErrors(['routeAdd' => "Данный маршрут уже существует!"]);

        } else {
            $newRoute = Route::create([
                'departurePoint' => $departurePoint,
                'destination_id' => $request->get('destination_id'),
                'travelTime' => $request->get('travelTime'),
            ]);
        }

        return back()->withErrors(['routeAdd'=>'Маршрут успешно добавлен!']);


    }

    public function destroy(Route $route)
    {
        $route = Route::find($route->id)->delete();
        if($route){
            return back()->withErrors(['deleteRoute'=>'Маршрут удален!']);
        }else{
            return back()->withErrors(['deleteRoute'=>'Ошибка удаления!']);
        }
    }
}
