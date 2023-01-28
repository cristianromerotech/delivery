<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* $request->validate([
            'title'=>'required|min:3'
        ]); */

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        //dd($email, $password, $user);
       

        if ($user) {
            if ($password == $user->password) {
                return redirect()->route('delivery')->with('success', 'Login Successful');
                
            } else {
                //return view('delivery.index', ['delivery'=>$user]);
                return redirect()->route('login')->with('error', 'Password incorrect');
            
            }
        } else {
           // return view('delivery.index', ['delivery'=>$user]);
           return redirect()->route('login')->with('error', 'Login Failed');
        }
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
        //
    }
}
