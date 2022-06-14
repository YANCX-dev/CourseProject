<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Element;
use App\Models\News;
use App\Models\Admin;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\b;

class NewsController extends Controller
{
    public function index()
    {
        $dest = Destination::all();
        $news = DB::table('news')->simplePaginate(3);

        return view('home', compact('news','dest', ));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existNew = News::where('title', $request->newTitile)->orWhere('content', $request->newContent)->get();


        if (count($existNew) > 0){
            return back()->withErrors(['addNew'=>"Ошибка добавления новости, новость уже существует!"]);
        }
        else{
            News::create([
                'admin_id'=> Auth::user()->id,
                'title'=> $request->newTitile,
                'content'=> $request->newContent,
            ]);
            return redirect()->route('createInfo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {


        return view('news.show', compact('news'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $new = News::destroy($news->id);
        if ($new){
            return back()->withErrors(["message"=>"Новость успешно удалена"]);
        }
        else{
            return back()->withErrors(['message'=>'Ошибка удаления новости!']);
        }
    }
}
