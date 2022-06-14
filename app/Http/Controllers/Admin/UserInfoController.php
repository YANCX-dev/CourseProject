<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {
        $dest = Destination::all();
        $tickets = Ticket::all();
        $users = User::all()->sortBy('name');

        return view('admin.user.about', compact('users'));
    }
}
