<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Element;

class PageController extends Controller
{
    public function show(Page $page){

        $article = Element::find($page->id)->get();
        $pageId = $page->id;

        return view('forpassengers.rtr', compact('pageId','article'));
    }

    public function store(Request $request)
    {
        $existNameOfPage = Page::where('name', $request->name)->get();
        if (count($existNameOfPage) > 0){
            return back()->withErrors(["addPage"=>"Такая страница уже существует!"]);
        }
        else{
          $page = Page::create([
                'name'=>$request->name,
            ]);

          $element = Element::create([
              'content'=>$request->pageContent,
              'page_id'=>$page->id,
          ]);

            return redirect()->route('createInfo');
        }


    }



    public function destroy(Request $request){
        $article = Page::find($request->page)->delete();
        if ($article){
            return redirect()->route('deletePage');
        }
        else{
            return back()->withErrors(['deletePageInfo'=>'Ошибка удаления категории!']);
        }
    }
}
