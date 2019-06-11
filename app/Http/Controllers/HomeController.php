<?php

namespace App\Http\Controllers;

use App\Offer;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */
    public function index()
    {
        //return \Illuminate\Http\Response;
        return //Offer::first()->product;
        view('home', array('product' => 'products', 'products' => Offer::orderBy('product_id')->get()));
    }
}
