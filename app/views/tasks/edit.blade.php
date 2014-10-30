@extends('layouts.default')
@section('content')
  <h1>Edit Task</h1>
    {{ Form::model($task, array('route' => ['tasks.update', $task->id], 'method' => 'PUT') ) }}  


    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}

    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description') }}

    {{ Form::label('responsible', 'Responsible') }}
    {{ Form::text('responsible') }}
   

    {{ Form::label('duration', 'Duration') }}
    {{ Form::text('duration') }}

    {{ Form::label('start', 'Start') }}
    {{ Form::text('start') }}

    {{ Form::label('end', 'End') }}
    {{ Form::text('end') }}

    {{ Form::label('completed', 'Completed') }}
    {{ Form::checkbox('completed', '1') }}

    <hr>
    {{ Form::submit('Publish',array('class'=>'button')) }}

  {{ Form::close() }}
@stop