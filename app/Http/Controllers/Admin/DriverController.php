<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();

        return view('add-delete.driver',compact('drivers'));
    }


    public function store(Request $request)
    {
        $existedDriver = Driver::where('name', $request->name)
            ->where('surname', $request->surname)
            ->where('age', $request->age)
            ->get();

        if (count($existedDriver) > 0) {
            return back()->withErrors(['addDriver' => "Водитель уже зарегистрирован!"]);
        } else {
            $driver = Driver::create([
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'age' => $request->get('age'),
                'exp' => $request->get('exp'),
                'driverLicense' => $request->get('driverLicense')
            ]);
        }
        return redirect()->route('AddPage');

    }

    public function destroy(Request $request)
    {
        $driver = Driver::find($request->driver)->delete();
        if($driver){
            return redirect()->route('deletePage');
        }else{
            return back()->withErrors(['deleteDriver'=>'Ошибка удаления!']);
        }
    }
}
