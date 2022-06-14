<?php

namespace App\Http\Controllers;

use App\Http\Resources\CruiseResource;
use App\Models\Cruise;
use App\Models\Destination;
use App\Models\Route;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class CruisesController extends Controller
{
    public function showCruises(Request $request)
    {
        session()->flashInput($request->input());
        $dest = Destination::all();
        $destination = Destination::find($request->dest_point_id);
        $route = 'Челябинск';
        $dateWithoutTime = now()->format('Y:m:d');

        if ($request->departureDate != $dateWithoutTime) {
            $cruises = $destination->cruises()->where('departureDate', '>=', $dateWithoutTime)->where('departureTime', '>=', now()->addHours(5))->get();


        } else {
            $cruises = $destination->cruises()->where('departureDate', '=', $request->departureDate)->get();
        }


        return view('cruises.index', compact('cruises', 'route', 'destination', 'dest'));
    }

    public function adminCruises(Request $request)
    {
        session()->flashInput($request->input());
        $dest = Destination::all();
        $destination = Destination::find($request->dest_point_id);
        $route = 'Челябинск';
        $dateWithoutTime = now()->format('Y:m:d');


        if ($request->departureDate != $dateWithoutTime) {
            $cruises = $destination?->cruises()->where('departureDate', '>=', $dateWithoutTime)->where('departureTime', '>=', now()->addHours(5))->get();
        } else {
            $cruises = $destination->cruises()->where('departureDate', '=', $request->departureDate)->get();
        }


        return view('admin.cruises.index', compact('cruises', 'route', 'destination', 'dest'));
    }

    public function onlineCruises()
    {
        $dest = Destination::all();
        $dateWithoutTime = now()->format('Y-m-d');
        $timeFormat = now()->addHours(5)->format('H:i:s');
        $route = "Челябинск";

        $cruises = Cruise::all()->where('departureDate', '=', $dateWithoutTime)->where('departureTime', '>=', $timeFormat);


        return view('onlineboard.board', compact('cruises', 'route', 'dest'));
    }


    public function store(Request $request)
    {

        $existedCruise = Cruise::where('arrivalTime', $request->arrivalTime)
            ->where('departureDate', $request->departureTate)
            ->where('route_id', $request->route_id)
            ->where('bus_id', $request->bus_id)
            ->get();
        if (count($existedCruise) > 0) {

            return back()->withErrors(['cruiseAdd' => "Данный пункт уже существует!"]);

        } else {
            $cruise = Cruise::create([
                'arrivalTime' => $request->get('arrivalTime'),
                'route_id' => $request->get('route_id'),
                'bus_id' => $request->get('bus_id'),
                'ticketPrice' => $request->get('ticketPrice'),
                'departureDate' => $request->get('departureDate'),
                'departureTime' => $request->get('departureTime'),
                'arrivalDate' => $request->get('arrivalDate')
            ]);
        }

        return redirect()->route('AddPage');
    }

    public function destroy(Cruise $cruise)
    {
        $cruise = Cruise::find($cruise->id)->delete();
        if ($cruise) {
            return back()->withErrors(['deleteCruise'=>"Рейс успешно удален!"]);
        } else {
            return back()->withErrors(['deleteCruise' => 'Ошибка удаления!']);
        }
    }

    public function allcruises()
    {
        return CruiseResource::collection(Cruise::all());
    }

    public function cruiseById(Cruise $cruise)
    {
//        dd($cruise->id);
       return CruiseResource::collection(Cruise::where('id',$cruise->id)->get());
    }


}
