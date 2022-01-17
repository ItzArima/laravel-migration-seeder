<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Flight;

use Illuminate\Support\Facades\Artisan;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = new Flight;
        $flight->departure = $request->departure;
        $flight->destination = $request->destination;
        $flight->price = number_format((float)$request->price, 2 , '.' , '');
        $flight->date = $request->date;
        $flight->time = $request->time;
        $flight->save();

        $flights = Flight::all();
        $page = ceil(count($flights) / 15);
        return redirect(route('dashboard' , $page))->with(session()->flash('success', 'Flight added succesfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);
        $flights = Flight::all();
        $page = floor(count($flights) / 15);
        if($page == 0){
            $page = 1;
        }
        if(null == Flight::find($id)){
            return redirect(route('dashboard' , $page))->with(session()->flash('error', 'Please wait at least 1 second before deleting again'));
        }
        $flight->delete();
        $flights = Flight::all();
        if((count($flights) % 15) == 0){
            if($page == 0){
                $page = 1;
            }
            return redirect(route('dashboard' , $page))->with(session()->flash('success', 'Flight deleted succesfully,wait at least 1 second before deleting again'));
        }
        return redirect()->back()->with(session()->flash('success', 'Flight deleted succesfully,wait at least 1 second before deleting again'));
    }

    /**
     * Seed the db.
     *
     */
    public function seed(){
        Artisan::call('db:seed', [
            '--class' => 'FlightSeeder',
        ]);
        $flights = Flight::all();
        $page = ceil(count($flights) / 15);
        return redirect(route('dashboard' , $page))->with(session()->flash('success', 'added 15 elements to db'));
    }
}
