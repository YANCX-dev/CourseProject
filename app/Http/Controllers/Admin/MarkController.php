<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function store(Request $request)
    {
        $existedMark = Mark::where('mark', $request->mark)->get();

        if (count($existedMark) > 0) {
            return back()->withErrors(['addMark' => "Данная марка уже существует!"]);
        } else {
            $mark = Mark::create([
                'mark' => $request->get('mark')
            ]);
        }
        return redirect()->route('AddPage');
    }

    public function destroy(Request $request){
        $mark = Mark::find($request->mark)->delete();
        if($mark){
            return back()->withErrors(['deleteMark'=>'Успешно добавлено!']);
        }else{
            return back()->withErrors(['deleteMark'=>'Ошибка удаления!']);
        }
    }
}

