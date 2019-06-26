<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Middleware
    public function __construct() {
        $this->middleware('user');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("users", array('user' =>'users','users' => User::orderBy('name')->get()));
       // return view('home', array('product' => 'products', 'products' => Offer::orderBy('product_id')->get()));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    public function update(Request $request)
    {
        $data = $request->all();

        $rules = $rules = array(
            'role' => 'required|min:1|max:3',
        );
        
        $user= user::find($data['id']);
        $user->role= $data['role'];
        $user->save();
        
        return view("users", array('user' =>'users','users' => User::orderBy('name')->get()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return view("users", array('user' =>'users','users' => User::orderBy('name')->get())); 
    } 
}

