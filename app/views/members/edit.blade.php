
@extends('layouts.default')
@section('content')
  <h1>Edit Member</h1>
  {{ Form::model($member, array('route' => ['members.update', $member->id], 'method' => 'PUT') ) }}

    {{ Form::label('name', 'name') }}
    {{ Form::text('name') }}

    {{ Form::label('lastname', 'lastname') }}
    {{ Form::text('lastname') }}

    {{ Form::label('email', 'email') }}
    {{ Form::text('email') }}

    {{ Form::submit('Update',array('class'=>'button')) }}

  {{ Form::close() }}
@stop