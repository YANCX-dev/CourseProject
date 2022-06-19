<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CruiseResource;
use App\Models\Admin;
use App\Models\Cruise;
use App\Models\Destination;
use App\Models\Driver;
use App\Models\News;
use App\Models\Route;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();

        return view('add-delete.destination', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existedDest = Destination::where('destination', $request->destination)->get();

        if (count($existedDest) > 0) {
            return back()->withErrors(['message' => "Данный пункт уже существует!"]);
        } else {
            $dest = Destination::create([
                'destination' => $request->get('destination')
            ]);
        }

        return back()->withErrors(['message' => "Успешно добавлено!"]);


    }


    public function destroy(Destination $destination)
    {
       $dest = Destination::find($destination->id)->delete();

        if($dest){
            return back()->withErrors(["message"=>"Успешно удалено!"]);
        }else{
            return back()->withErrors(['message'=>'Ошибка удаления!']);
        }

    }
}
