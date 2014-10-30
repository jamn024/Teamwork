@extends('layouts.default')
@section('content')
  <h1>Create Members</h1>
  {{ Form::open(array('route' => 'members.store')) }}

    {{ Form::label('name', 'name') }}
    {{ Form::text('name') }}

    {{ Form::label('lastname', 'lastname') }}
    {{ Form::text('lastname') }}

    {{ Form::label('email', 'email') }}
    {{ Form::text('email') }}

    {{ Form::submit('Create',array('class'=>'button')) }}

  {{ Form::close() }}
@stop