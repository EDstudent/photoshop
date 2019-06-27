<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Offer;


class SearchController extends Controller
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
    
    
    public function getSearch()
    {
        //return \Illuminate\Http\Response;
        //return view('home', array('product' => 'products', 'products' => Offer::orderBy('product_id')->get()));
        return view('search');
    }
    
    public function postSearch(Request $request) {
        return Offer::where('country', 'LIKE', '%'.$request->get('search').'%')
                ->orWhere('description', 'LIKE', '%'.$request->get('search').'%')->get();
    }
}

