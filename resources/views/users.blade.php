@extends('layouts.app', ['title' => 'Users'])
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            
            <table class="table table-hover">
            <tr class="toprow">
                
                <th>User</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
                <th></th>
            </tr>
            
        @if ( Auth::user()->isAdmin() )   
            @foreach ($users as $user)
             <tr>  
                <td>{{$user->name}} </td> 
                <td>{{$user->email}} </td> 
                <td>{{$user->role}}</td>
                <td><a class="btn btn-primary btn-sm" href='{{ url('/role/delete', $user->id) }}'>X</a>
                <td>
                    {!! Form::open(['action' => 'RoleController@update', 'files' => false, 'class' => 'form-horizontal']) !!}
                    <div class="col-md-6">
                    {!! Form::label('Role', 'New Role', ['class' => '.visible-*-inline-block']) !!}
                    </div>
                    <div class="col-md-6">
                    {!! Form::text('role', '', ['class' => 'form-control'.($errors->has('role') ? ' is-invalid' : '' )]) !!}  
                    </div>
                     @if ($errors->has('Role'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                    {!! Form::hidden ('id',$user->id)!!}
                    {!! Form::submit('submit data', ['class' => '.visible-*-inline-block']) !!}
                     {{Form::close()}}
                </td>    
                    
                </td>
            </tr>
        
            @endforeach
        @endif    
            </table>
            @csrf
            
            </form>
        </div>
    </div>
</div>
@endsection