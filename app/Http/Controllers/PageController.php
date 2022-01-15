<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Flight;

use DB;

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

    public function dashboard(){
        return view('dashboard');
    }
}
