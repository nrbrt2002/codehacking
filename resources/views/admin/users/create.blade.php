@extends('layouts.admin')

@section('content')
  <h1>Create User</h1>
  <hr>
@include('includes.form_errors')
  {!! form::open(['method'=>'POST', 'action'=>'usersController@store', 'files'=>'true']) !!}
  <div class="form-group">
    {!! form::label('name', 'Name:') !!}
    {!! form::text('name', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! form::label('email','E-mail:') !!}
    {!! form::email('email', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! form::label('profile_pic','Profile Pic:') !!}
    {!! form::file('profile_pic', null, ['class'=>'form-control btn btn-primary']) !!}
  </div>
  <div class="form-group">
    {!! form::label('role_id','Role:') !!}
    {!! form::select('role_id', [''=>'Make a Choice'] + $roles, null, ['class'=>'form-control btn btn-primary']) !!}
  </div>
  <div class="form-group">
    {!! form::label('status','Status:') !!}
    {!! form::select('status', array(1 => 'Active', 0=>'Not Active'), 0, ['class'=>'form-control btn btn-primary']) !!}
  </div>
  <div class="form-group">
    {!! form::label('password','Password:') !!}
    {!! form::password('password', ['class'=>'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! form::close() !!}
@endsection
