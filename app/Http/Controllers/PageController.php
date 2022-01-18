<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Flight;

use App\Model\Article;

use DB;
use Illuminate\Validation\Rules\Exists;

class PageController extends Controller
{
    public function home(){
        $flights = Flight::all();
        $random = [];
        $images = [];
        if(count($flights) > 0){
            for($i = 0; $i<4; $i++){
                $num = rand(0,count($flights)-1);
                if(!in_array($flights[$num], $random)){
                    array_push($random, $flights[$num]);
                }
                else{
                    $i--;
                }
            }
        }
        $img=config('img');
        for($i = 0; $i<4; $i++){
            $num = rand(0,count($img)-1);
            if(!in_array($img[$num], $images)){
                array_push($images, $img[$num]);
            }
            else{
                $i--;
            }
        }
        return view('home' , compact('random', 'images'));
    }

    public function blog(){
        $articles = Article::all(); 
        return view('blog' , compact('articles'));
    }

    public function news(){
        return view('news');
    }
}
