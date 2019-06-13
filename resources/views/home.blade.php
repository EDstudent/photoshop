@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
                
                <div class="card-header">@lang('messages.dashboard')</div>
                <!--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>-->
                
                    @foreach ( $products as $product )
                    <div class="card">
                        <div class="card-body">
                   
                        <p class="card-text">
                            <!--<span class="badge badge-primary">@lang('messages.'.($product->product->name))</span>--> 
                            <span class="badge badge-primary">@lang('messages.'.($product->product->name))</span>
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
