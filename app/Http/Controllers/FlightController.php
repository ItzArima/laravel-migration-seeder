<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Flight;

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
        dd($flight->price);
        $flight->save();

        return redirect()->back()->with(session()->flash('success', 'Flight added succesfully'));
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
        $flight->delete();
        return redirect()->back()->with(session()->flash('success', 'Flight deleted succesfully'));
    }
}
