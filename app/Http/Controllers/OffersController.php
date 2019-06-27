<?php
namespace App\Http\Controllers;
use App\Product;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;
class OffersController extends Controller
{
    // Middleware
    public function __construct()
    {
        // only Admins have access
        $this->middleware('user');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
       return view('offers_create', array('name' => Product::all()->sortBy('name')->pluck('name','id')));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = $rules = array(
            'name' => 'required|exists:product,name',
            'price' => 'required|numeric|min:0|max:100',
            'country' => 'required|min:3|max:10',
            'description' => 'max:100',
        );
        
        $this->validate($request, $rules);
        $offers = new Offer();
        $offers->user_id = Auth::id();
        $offers->product_id = $data['name'];
        $offers->price = $data['price'];
        $offers->country = $data['country'];
        $offers->description = $data['description'];
        $offers->save();
        return redirect('home');
    }
}
