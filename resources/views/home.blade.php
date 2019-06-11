@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ url('create_product') }}">Add a new product</a></li>
                    <li class="list-group-item"><a href="{{ url('create_product') }}">@lang('messages.create_product')</a></li>
                </ul>
                
                <div class="card-header">@lang('messages.dashboard')</div>
                <!--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                
                product->name ne vivodit-->    
                
                    
                
                
                    @foreach ( $products as $product )
                    <div class="card">
                        <div class="card-body">
                   
                        <p class="card-text">
                            <span class="badge badge-primary">@lang('messages.'.($product->product->name))</span><!--  nestrada --> 
                            <span class="badge badge-primary">{{$product->product->name}}</span>
                            <span class="badge badge-primary">{{$product->price}}</span>
                            <span class="badge badge-primary">{{$product->country}}</span>
                            <span class="badge badge-primary">{{$product->description}}</span>
                        </p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
