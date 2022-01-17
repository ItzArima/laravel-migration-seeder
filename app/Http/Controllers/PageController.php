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
        $img=[
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
            [
                'id' => 1016,
            ],
            [
                'id' => 1018,
            ],
            [
                'id' => 1067,
            ],
            [
                'id' => 108,
            ],
            [
                'id' => 117,
            ],
        ];
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

    public function getPage(){
        return redirect(route('dashboard' , 1));
    }
}
