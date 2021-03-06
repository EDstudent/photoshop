@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new offer</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'OffersController@store', 'files' => false, 'class' => 'form-horizontal']) !!}
                    
                    <div class="form-group row">
                    {!! Form::label('name', 'Product name', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('name', $name, '', ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                     @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif     
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    {!! Form::label('price', 'Price of the product', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('price', '', ['class' => 'form-control'.($errors->has('price') ? ' is-invalid' : '' )]) !!}                     
                     @if ($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                    </div></div>
                    
                    <div class="form-group row">
                    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('country', '', ['class' => 'form-control'.($errors->has('country') ? ' is-invalid' : '' )]) !!}
                     @if ($errors->has('country'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>  
                    
                    <div class="form-group row">
                    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('description', '', ['class' => 'form-control'.($errors->has('description') ? ' is-invalid' : '' )]) !!}                  
                     @if ($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    
                    {!! Form::submit('submit data', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 