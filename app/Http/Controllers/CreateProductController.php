<?php
namespace App\Http\Controllers;

use App\Product;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CreateProductController extends Controller
{
    // Middleware
    public function __construct()
    {
        // only Admins have access
        $this->middleware('admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    return view('create_product');
    }
    
    public function store(Request $request)
    {
        $data = $request->all();

        $rules = $rules = array(
            'product' => 'required|min:2|max:10|unique:products,name',
        );

        $this->validate($request, $rules);

        $offers = new Product();
        $offers->name = $data['product'];
        $offers->save();
        return redirect('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */


}
