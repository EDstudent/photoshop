@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new product</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'CreateProductController@store', 'files' => false, 'class' => 'form-horizontal']) !!}
                    <div class="form-group row">
                    {!! Form::label('product', 'Product name', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('product', '', ['class' => 'form-control'.($errors->has('product') ? ' is-invalid' : '' )]) !!}
                     @if ($errors->has('product'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('product') }}</strong>
                        </span>
                    @endif     
                    </div></div>                  
                    {!! Form::submit('submit data', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

