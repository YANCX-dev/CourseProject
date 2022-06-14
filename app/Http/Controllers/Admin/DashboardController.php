<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Cruise;
use App\Models\Destination;
use App\Models\Driver;
use App\Models\Mark;
use App\Models\Route;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dest = Destination::all();
        $tickets = Ticket::all();
        $users = User::all()->sortBy('name');


        return view('admin.dashboard', compact('dest', 'tickets','users'));
    }
    public function userInfo(Request $request)
    {
        $user = User::find($request->user);
        $userTickets = Ticket::where('user_id',$user->id)->get();

        return view('admin.user.index', compact('user','userTickets'));
    }
}
