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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
