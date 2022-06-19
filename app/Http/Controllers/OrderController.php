<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderShipped;
use App\Models\Bus;
use App\Models\Cruise;
use App\Models\Destination;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Cruise $cruise)
    {
        $countOfPlaces = $cruise->bus->countOfPlaces;

        $tickets = Ticket::where('cruise_id', $cruise->id)->get();
        $busyPlaces = [];
        $allPlaces = [];
        for ($i = 1; $i != $countOfPlaces + 1; $i++) {
            array_push($allPlaces, $i);
        }
        foreach ($tickets as $ticket) {
            $place = $ticket->place;
            array_push($busyPlaces, $place);
        }
        $freePlaces = array_diff($allPlaces, $busyPlaces);

        return view('orders.index', compact('cruise', 'freePlaces'));

    }


    public function store(Request $request)
    {
        dd($request);
        $user = User::where('email', $request->email)->where('phone_number', $request->phone_number)->first();

        if (!$user) {
            $user = User::create([
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'phone_number' => $request->get('phone_number'),
                'email' => $request->get('email'),
            ]);
        }

        $ticket = $user->tickets()->create([
            'place' => $request->place,
            'cruise_id' => $request->cruise_id,
        ]);

        $departurePoint = $cruise->route->departurePoint;
        $departureTime = $cruise->departureTime;
        $destination = $cruise->route->destination->destination;
        $arrivalTime = $cruise->arrivalTime;
        $travelTime = $cruise->route->travelTime;
        $busRegNumber = $cruise->bus->busRegNum;
        $ticketPrice = $cruise->ticketPrice;
        $userName = $user->name;
        $place = $ticket->place;


        Mail::to($request->email)->
        send(new OrderShipped($departurePoint, $departureTime, $destination,
            $arrivalTime, $travelTime, $busRegNumber, $ticketPrice, $place, $userName));

        if ($ticket) {
            return redirect()->route('home')->with(["message"=>"Спасибо, Ваш заказ успешно забронирован! Билет ожидает в почтовом ящике :)"]);
        }
        return back()->with(['message'=>'Ошибка оформления билета :( Попробуйте еще']);

    }

    public function create(Request $request){
        dd($request);
    }


    public function getFreeCruisePlaces($id){


        $cruise = Cruise::where('id', $id)->get();
        $bus = Bus::where('id',$cruise[0]->bus_id)->get();
        $countOfPlaces = $bus[0]->countOfPlaces;


        $tickets = Ticket::where('cruise_id', $cruise[0]->id)->get();

        $busyPlaces = [];
        $allPlaces = [];

        for ($i = 1; $i != $countOfPlaces + 1; $i++) {
            array_push($allPlaces, $i);
        }
        foreach ($tickets as $ticket) {
            $place = $ticket->place;
            array_push($busyPlaces, $place);
        }
        $freePlaces = array_diff($allPlaces, $busyPlaces);

        return $freePlaces;
    }
}
