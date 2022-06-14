<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\News;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){

        $news = News::all();

        return view('admin.info', compact('news'));

    }
}
