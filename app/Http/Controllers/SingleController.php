<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Article;

class SingleController extends Controller
{
    public function blog($id){
        $article = Article::find($id);
        if($article != null){
            return view('singles/singleBlog' , compact('article'));
        }
        return view('singles/singleBlog')->with(session()->flash('error' , 'ops , post not find'));

    }

    public function news($id){
        $article = Article::find($id);
        if($article != null){
            return view('singles/singleNews' , compact('article'));
        }
        return view('singles/singleNews')->with(session()->flash('error' , 'ops , post not find'));

    }
}
