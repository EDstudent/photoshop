@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('messages.admin_panel')</h4>
                    <div class="card-text">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif     
                    </div>
                    <ul class="list-group">
                       <li class="list-group-item"><a href="{{ url('/product') }}">@lang('messages.add_product')</a></li>
                       <li class="list-group-item"><a href="{{ url('/role') }}">@lang('messages.see_user_roles')</a></li>
                       <li class="list-group-item"><a href="{{ url('/offer') }}">@lang('messages.create_new_offer')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

