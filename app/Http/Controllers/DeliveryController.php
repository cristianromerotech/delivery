<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
        $request->validate([
            'origin'=>'required|min:3',
            'destination'=>'required|min:3',
            'money'=>'required|min:3'
        ]);

        $delivery = new Trip;
        $delivery->origin = $request->origin;
        $delivery->destination = $request->destination;
        $delivery->money = $request->money;
        $delivery->save();

        return redirect()->route('delivery')->with('success', 'Delivery created correctly');
    }

    public function index(){
        $delivery = Trip::all();
        return view('delivery.index', ['deliveries'=>$delivery]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $delivery = Trip::find($id);
            return view('delivery.show', ['deliveries'=>$delivery]);
        
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
        //
    }
}
