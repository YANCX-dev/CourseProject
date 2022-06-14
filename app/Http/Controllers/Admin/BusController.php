<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Driver;
use App\Models\Mark;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        $drivers = Driver::all();
        $marks = Mark::all();


        return view('add-delete.bus', compact('buses','drivers','marks'));
    }


    public function store(Request $request)
    {
        $existedBus = Bus::where('busRegNum', $request->busRegNum)->get();

        if (count($existedBus) > 0) {
            return back()->withErrors(['addMark' => "Данный автобус уже существует!"]);
        } else {
            $mark = Bus::create([
                'busRegNum' => $request->get('busRegNum'),
                'countOfPlaces' => $request->get('countOfPlaces'),
                'driver_id' => $request->get('driver_id'),
                'mark_id' => $request->get('mark_id')
            ]);
        }
        return redirect()->route('AddPage');
    }

    public function destroy(Bus $bus)
    {
        $bus = Bus::find($bus->id)->delete();
        if ($bus) {
            return redirect()->route('deletePage');
        } else {
            return back()->withErrors(['deleteBus' => 'Ошибка удаления!']);
        }
    }
}
