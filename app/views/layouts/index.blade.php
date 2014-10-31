@extends('layouts.default')
@section('content')
  <h1>Recent Tasks</h1>

  {{ HTML::linkAction('tasks.create','New task',[],['class'=>'button']) }}

  @foreach($pending as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>Responsible: {{ $task->member->name . ' ' . $task->member->lastname }}</small><li>
        <small>Duration: {{ $task->duration }} hours</small><li>
        <small>Start: {{ $task->start }}</small><li>
        <small>End: {{ $task->end }}</small><li>
      </div>

    </div>
    <hr>
  @endforeach

  @foreach($finished as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>Responsible:{{ $task->member->name . ' ' . $task->member->lastname  }}</small><li>
        <small>Duration:{{ $task->duration }} hours</small><li>
        <small>Start:{{ $task->start }}</small><li>
        <small>End:{{ $task->end }}</small><li>
      </div>

    </div>
    <hr>
  @endforeach
@stop