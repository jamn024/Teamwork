@extends('layouts.default')
@section('content')
  <h1>Recent Tasks</h1>

  {{ HTML::linkAction('tasks.create','New task',[],['class'=>'button']) }}

  @foreach($pending as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>{{ $task->responsible }}</small><li>
        <small>{{ $task->duration }}</small><li>
        <small>{{ $task->start }}</small><li>
        <small>{{ $task->end }}</small><li>
      </div>

    </div>
    <hr>
  @endforeach

  @foreach($finished as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>{{ $task->responsible }}</small><li>
        <small>{{ $task->duration }}</small><li>
        <small>{{ $task->start }}</small><li>
        <small>{{ $task->end }}</small><li>
      </div>

    </div>
    <hr>
  @endforeach
@stop