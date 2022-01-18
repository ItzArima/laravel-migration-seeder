<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;

use App\Model\Flight;

class SeederController extends Controller
{
    public function seed(){
        Artisan::call('db:seed', [
            '--class' => 'FlightSeeder',
        ]);
        $flights = Flight::all();
        $page = ceil(count($flights) / 15);
        return redirect(route('dashboard' , $page))->with(session()->flash('success', 'added 15 elements to db'));
    }
}
