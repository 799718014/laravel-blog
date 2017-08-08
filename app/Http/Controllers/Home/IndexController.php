<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
       $art = new Article();
       $article = $art->orderBy('art_id','desc')->limit(10)->get();

     

        return view('home/index/index',compact('article'));

    }
}
