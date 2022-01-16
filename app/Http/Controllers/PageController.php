<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Flight;

use DB;
use Illuminate\Validation\Rules\Exists;

class PageController extends Controller
{
    public function home(){
        $flights = Flight::all();
        $random = [];
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
        $images=[
            [
                'id' => 1011,
            ],
            [
                'id' => 1039,
            ],
            [
                'id' => 122,
            ],
            [
                'id' => 158,
            ],
        ];
        return view('home' , compact('random', 'images'));
    }

    public function dashboard($page){
        $flights = Flight::all();
        $end = $page * 15;
        $start = ($page - 1) * 15;
        $display = [];
        $nonext = 0;
        for($i=$start; $i<$end; $i++){
            if(isset($flights[$i])){
                array_push($display , $flights[$i]);
            }
            if(!isset($flights[$i+1])){
                $nonext = 1;
            }
        }
        return view('dashboard', compact('display' , 'page' , 'nonext'));
    }
}
